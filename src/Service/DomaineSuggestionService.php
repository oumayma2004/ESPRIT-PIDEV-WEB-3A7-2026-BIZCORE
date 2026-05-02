<?php

namespace App\Service;

use App\Repository\DomaineCoachingRepository;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Discovers emerging coaching domains worldwide by combining:
 *   - SerpAPI (Google search for recent trends)
 *   - Gemini (structures the findings into JSON suggestions and excludes duplicates)
 *
 * Used by the "Quoi de neuf ?" button on the admin domaine index page.
 */
class DomaineSuggestionService
{
    private const SUGGESTION_COUNT = 6;
    private const SERPAPI_ENDPOINT = 'https://serpapi.com/search.json';

    public function __construct(
        private HttpClientInterface $http,
        private DomaineCoachingRepository $domaineRepo,
        private LoggerInterface $logger,
        private string $serpApiKey,
        private string $geminiApiKey,
        private string $geminiModel,
    ) {}

    /**
     * @return array{suggestions: array<int, array{nom: string, description: string, tendance?: string, pourquoi?: string}>, source: string}
     */
    public function discover(): array
    {
        $existing = $this->loadExistingDomaineNames();

        $trends = $this->fetchSerpApiTrends();
        $suggestions = $this->askGeminiForSuggestions($existing, $trends);

        // Hard filter: drop anything whose normalized name already exists
        $existingNormalized = array_map([$this, 'normalize'], $existing);
        $filtered = [];
        foreach ($suggestions as $s) {
            if (!isset($s['nom'], $s['description'])) {
                continue;
            }
            $nom = trim((string) $s['nom']);
            $desc = trim((string) $s['description']);
            if ($nom === '' || $desc === '') {
                continue;
            }
            $norm = $this->normalize($nom);
            if (in_array($norm, $existingNormalized, true)) {
                continue;
            }
            $filtered[] = [
                'nom' => $nom,
                'description' => $desc,
                'tendance' => isset($s['tendance']) ? (string) $s['tendance'] : null,
                'pourquoi' => isset($s['pourquoi']) ? (string) $s['pourquoi'] : null,
            ];
            if (count($filtered) >= self::SUGGESTION_COUNT) {
                break;
            }
        }

        return [
            'suggestions' => $filtered,
            'source' => $trends === [] ? 'gemini' : 'serpapi+gemini',
        ];
    }

    /**
     * @return string[]
     */
    private function loadExistingDomaineNames(): array
    {
        $names = [];
        foreach ($this->domaineRepo->findAll() as $d) {
            $names[] = (string) $d->getNomDomaine();
        }
        return $names;
    }

    /**
     * @return array<int, array{title: string, snippet: string}>
     */
    private function fetchSerpApiTrends(): array
    {
        if ($this->serpApiKey === '') {
            return [];
        }
        try {
            $response = $this->http->request('GET', self::SERPAPI_ENDPOINT, [
                'query' => [
                    'engine' => 'google',
                    'q' => 'emerging coaching niches trends worldwide 2026',
                    'hl' => 'en',
                    'num' => 10,
                    'api_key' => $this->serpApiKey,
                ],
                'timeout' => 12,
            ]);

            if ($response->getStatusCode() !== 200) {
                $this->logger->warning('SerpAPI returned non-200', ['status' => $response->getStatusCode()]);
                return [];
            }

            $data = $response->toArray(false);
            $items = [];
            foreach (($data['organic_results'] ?? []) as $r) {
                $title = (string) ($r['title'] ?? '');
                $snippet = (string) ($r['snippet'] ?? '');
                if ($title === '' && $snippet === '') {
                    continue;
                }
                $items[] = ['title' => $title, 'snippet' => $snippet];
                if (count($items) >= 8) {
                    break;
                }
            }
            return $items;
        } catch (\Throwable $e) {
            $this->logger->warning('SerpAPI call failed: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * @param string[] $existing
     * @param array<int, array{title: string, snippet: string}> $trends
     * @return array<int, array<string, mixed>>
     */
    private function askGeminiForSuggestions(array $existing, array $trends): array
    {
        $existingList = $existing === []
            ? '(aucun domaine existant)'
            : '- ' . implode("\n- ", $existing);

        $trendsBlock = '';
        if ($trends !== []) {
            $lines = [];
            foreach ($trends as $t) {
                $lines[] = '• ' . trim($t['title']) . ' — ' . trim($t['snippet']);
            }
            $trendsBlock = "\n\nEXTRAITS DE RECHERCHE WEB RÉCENTE (Google, 2026) :\n" . implode("\n", $lines);
        }

        $prompt = <<<TXT
Tu es un expert en coaching mondial et en tendances émergentes 2025-2026.

Propose exactement {$this->suggestionCount()} NOUVEAUX domaines de coaching émergents
dans le monde, qui ne sont PAS déjà présents dans la liste ci-dessous.

DOMAINES DÉJÀ EXISTANTS (à exclure formellement) :
{$existingList}
{$trendsBlock}

Contraintes :
- Chaque "nom" doit être COURT (2 à 5 mots), en français, sans emoji.
- Chaque "description" doit être 2 à 3 phrases en français, professionnelle, claire.
- "tendance" : une étiquette parmi : "En forte croissance", "Émergent", "Niche prometteuse".
- "pourquoi" : 1 courte phrase expliquant l'intérêt en 2026.

Réponds UNIQUEMENT avec du JSON valide, sans texte avant ou après, au format exact :
{
  "suggestions": [
    {
      "nom": "…",
      "description": "…",
      "tendance": "…",
      "pourquoi": "…"
    }
  ]
}
TXT;

        $url = sprintf(
            'https://generativelanguage.googleapis.com/v1beta/models/%s:generateContent?key=%s',
            rawurlencode($this->geminiModel ?: 'gemini-2.5-flash-lite'),
            rawurlencode($this->geminiApiKey)
        );

        try {
            $response = $this->http->request('POST', $url, [
                'json' => [
                    'contents' => [[
                        'role' => 'user',
                        'parts' => [['text' => $prompt]],
                    ]],
                    'generationConfig' => [
                        'temperature' => 0.8,
                        'responseMimeType' => 'application/json',
                    ],
                ],
                'timeout' => 25,
            ]);

            if ($response->getStatusCode() !== 200) {
                $this->logger->warning('Gemini non-200', [
                    'status' => $response->getStatusCode(),
                    'body' => substr($response->getContent(false), 0, 500),
                ]);
                return [];
            }

            $data = $response->toArray(false);
            $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';
            if (!is_string($text) || $text === '') {
                return [];
            }

            $text = trim($text);
            // Strip ```json fences if Gemini adds them despite MIME hint
            if (str_starts_with($text, '```')) {
                $text = preg_replace('/^```(?:json)?\s*/i', '', $text);
                $text = preg_replace('/```\s*$/', '', (string) $text);
                $text = trim((string) $text);
            }

            $decoded = json_decode($text, true);
            if (!is_array($decoded) || !isset($decoded['suggestions']) || !is_array($decoded['suggestions'])) {
                $this->logger->warning('Gemini returned unexpected JSON shape', ['text' => substr($text, 0, 400)]);
                return [];
            }
            return $decoded['suggestions'];
        } catch (\Throwable $e) {
            $this->logger->error('Gemini call failed: ' . $e->getMessage());
            return [];
        }
    }

    private function suggestionCount(): int
    {
        return self::SUGGESTION_COUNT;
    }

    private function normalize(string $value): string
    {
        $v = mb_strtolower(trim($value), 'UTF-8');
        if (function_exists('iconv')) {
            $ascii = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $v);
            if ($ascii !== false) {
                $v = $ascii;
            }
        }
        $v = preg_replace('/[^a-z0-9]+/', ' ', $v) ?? $v;
        return trim((string) $v);
    }
}
