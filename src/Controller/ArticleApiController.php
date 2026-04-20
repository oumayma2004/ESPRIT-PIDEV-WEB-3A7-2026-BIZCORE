<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Service\ReadabilityService;
use App\Service\TrendingService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ╔══════════════════════════════════════════════════════════════════╗
 * ║              BLOG API — ArticleApiController                     ║
 * ║                                                                  ║
 * ║  Base URL : /api/articles                                        ║
 * ╠══════════════════════════════════════════════════════════════════╣
 * ║  EXISTING                                                        ║
 * ║  GET    /api/articles                → list                      ║
 * ║  GET    /api/articles/stats          → KPIs                      ║
 * ║  GET    /api/articles/categories     → categories                ║
 * ║  GET    /api/articles/trending       → trending list             ║
 * ║  POST   /api/articles/trending/refresh → recalculate             ║
 * ║  GET    /api/articles/{id}           → single article            ║
 * ║  PATCH  /api/articles/{id}/view      → increment views           ║
 * ║  GET    /api/articles/{id}/readability → readability score       ║
 * ║  POST   /api/articles/{id}/ai-analyze  → save AI results         ║
 * ║  POST   /api/articles/{id}/call-ai     → proxy AI analysis       ║
 * ╠══════════════════════════════════════════════════════════════════╣
 * ║  NEW                                                             ║
 * ║  POST   /api/articles/generate-draft   → AI article generator    ║
 * ║  POST   /api/articles/moderate-avis    → AI avis moderation      ║
 * ╚══════════════════════════════════════════════════════════════════╝
 */
#[Route('/api/articles', name: 'api_article_')]
class ArticleApiController extends AbstractController
{
    // ── Helper — consistent JSON envelope ────────────────────────
    private function json_response(
        mixed  $data,
        bool   $success = true,
        string $message = 'OK',
        int    $status  = Response::HTTP_OK
    ): JsonResponse {
        return new JsonResponse([
            'success' => $success,
            'message' => $message,
            'data'    => $data,
        ], $status);
    }

    // ── Helper — serialize one Article ───────────────────────────
    private function serializeArticle(object $article): array
    {
        return [
            'id'               => $article->getIdArticle(),
            'titre'            => $article->getTitre(),
            'contenu'          => $article->getContenu(),
            'contenu_extrait'  => mb_strimwidth(strip_tags($article->getContenu() ?? ''), 0, 200, '…'),
            'image_principale' => $article->getImagePrincipale(),
            'categorie'        => $article->getCategorie(),
            'statut'           => $article->getStatut(),
            'nombre_vues'      => $article->getNombreVues(),
            'mots_cles'        => $article->getMotsClesArray(),
            'resume_ia'        => $article->getResumeIa(),
            'ton_ia'           => $article->getTonIa(),
            'categorie_ia'     => $article->getCategorieIa(),
            'trending_score'   => $article->getTrendingScore(),
            'is_trending'      => $article->isTrending(),
            'reading_minutes'  => $article->getReadingTimeMinutes(),
        ];
    }

    // ── Helper — call OpenRouter AI (shared by generate + moderate) ──
    private function callOpenRouter(string $prompt, string $apiKey, int $maxTokens = 1200): array
    {
        $ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $apiKey,
                'HTTP-Referer: https://bizcore.local',
                'X-Title: BizCore Blog',
            ],
            CURLOPT_POSTFIELDS => json_encode([
                'model'      => 'nvidia/nemotron-3-super-120b-a12b:free',
                'max_tokens' => $maxTokens,
                'messages'   => [['role' => 'user', 'content' => $prompt]],
            ]),
            CURLOPT_TIMEOUT => 45,
        ]);

        $body      = curl_exec($ch);
        $httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($curlError) {
            return ['error' => "Erreur réseau cURL: $curlError"];
        }
        if ($httpCode !== 200) {
            return ['error' => "Erreur API HTTP $httpCode. Body: $body"];
        }

        $decoded = json_decode($body, true);
        $text    = $decoded['choices'][0]['message']['content'] ?? '';

        return ['text' => trim($text), 'raw' => $body];
    }

    // ── Helper — call OpenRouter with auto free-model router + retry ──
    // Uses openrouter/free which auto-picks any available free model.
    // Never returns 404 (no model found) or stays rate-limited long.
    private function callOpenRouterFree(string $prompt, int $maxTokens = 1200): array
    {
        $apiKey = $_ENV['OPENROUTER_API_KEY'] ?? $_ENV['ANTHROPIC_API_KEY'] ?? '';
        if (!$apiKey) {
            return ['error' => "Clé API manquante. Ajoutez OPENROUTER_API_KEY=sk-or-v1-... dans .env"];
        }

        $attempts = 3;
        $lastError = '';

        for ($i = 0; $i < $attempts; $i++) {
            if ($i > 0) {
                sleep(2); // wait 2s before retry on 429
            }

            $ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_HTTPHEADER     => [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $apiKey,
                    'HTTP-Referer: https://bizcore.local',
                    'X-Title: BizCore Blog',
                ],
                CURLOPT_POSTFIELDS => json_encode([
                    'model'      => 'openrouter/free',
                    'max_tokens' => $maxTokens,
                    'messages'   => [['role' => 'user', 'content' => $prompt]],
                ]),
                CURLOPT_TIMEOUT => 60,
            ]);

            $body      = curl_exec($ch);
            $httpCode  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);

            if ($curlError) {
                $lastError = "Erreur réseau cURL: $curlError";
                continue;
            }
            if ($httpCode === 429) {
                $lastError = "Trop de requêtes (429) — nouvelle tentative...";
                continue;
            }
            if ($httpCode !== 200) {
                $lastError = "Erreur API HTTP $httpCode. Body: $body";
                continue;
            }

            $decoded = json_decode($body, true);
            $text    = $decoded['choices'][0]['message']['content'] ?? '';
            return ['text' => trim($text), 'raw' => $body];
        }

        return ['error' => $lastError];
    }

    // ════════════════════════════════════════════════════════════════
    // EXISTING ENDPOINTS (unchanged)
    // ════════════════════════════════════════════════════════════════

    #[Route('', name: 'list', methods: ['GET'])]
    public function list(Request $request, ArticleRepository $repo): JsonResponse
    {
        $search    = trim((string) $request->query->get('search', ''));
        $categorie = trim((string) $request->query->get('categorie', ''));
        $statut    = trim((string) $request->query->get('statut', ''));

        $allowedSortBy  = ['titre', 'nombre_vues', 'id_article', 'trending_score'];
        $allowedSortDir = ['ASC', 'DESC'];

        $sortBy  = $request->query->get('sortBy', 'id_article');
        $sortDir = strtoupper((string) $request->query->get('sortDir', 'DESC'));

        if (!in_array($sortBy, $allowedSortBy, true))  { $sortBy  = 'id_article'; }
        if (!in_array($sortDir, $allowedSortDir, true)) { $sortDir = 'DESC'; }

        $page  = max(1, (int) $request->query->get('page', 1));
        $limit = min(50, max(1, (int) $request->query->get('limit', 9)));

        $fieldMap = [
            'id_article'     => 'a.id_article',
            'titre'          => 'a.titre',
            'nombre_vues'    => 'a.nombre_vues',
            'trending_score' => 'a.trending_score',
        ];

        $qb = $repo->createQueryBuilder('a');

        if ($search !== '') {
            $qb->andWhere('LOWER(a.titre) LIKE :search OR LOWER(a.contenu) LIKE :search')
               ->setParameter('search', '%' . strtolower($search) . '%');
        }
        if ($categorie !== '') {
            $qb->andWhere('LOWER(a.categorie) = :categorie')
               ->setParameter('categorie', strtolower($categorie));
        }
        if ($statut !== '') {
            $qb->andWhere('a.statut = :statut')
               ->setParameter('statut', $statut);
        }

        $qb->orderBy($fieldMap[$sortBy], $sortDir);

        $countQb = clone $qb;
        $total   = (int) $countQb->select('COUNT(a.id_article)')->getQuery()->getSingleScalarResult();

        $qb->select('a')->setFirstResult(($page - 1) * $limit)->setMaxResults($limit);
        $articles = $qb->getQuery()->getResult();

        return $this->json_response([
            'articles'   => array_map(fn($a) => $this->serializeArticle($a), $articles),
            'pagination' => [
                'page'        => $page,
                'limit'       => $limit,
                'total'       => $total,
                'total_pages' => (int) ceil($total / $limit),
                'has_next'    => ($page * $limit) < $total,
                'has_prev'    => $page > 1,
            ],
            'filters'    => compact('search', 'categorie', 'statut', 'sortBy', 'sortDir'),
        ]);
    }

    #[Route('/stats', name: 'stats', methods: ['GET'])]
    public function stats(ArticleRepository $repo): JsonResponse
    {
        $articles = $repo->findAll();
        if (empty($articles)) {
            return $this->json_response(['total' => 0, 'publie' => 0, 'brouillon' => 0, 'archive' => 0,
                'total_vues' => 0, 'moy_vues' => 0, 'categories' => [], 'top5' => []]);
        }

        $total     = count($articles);
        $publie    = count(array_filter($articles, fn($a) => $a->getStatut() === 'publié'));
        $brouillon = count(array_filter($articles, fn($a) => $a->getStatut() === 'brouillon'));
        $archive   = count(array_filter($articles, fn($a) => $a->getStatut() === 'archivé'));
        $totalVues = array_sum(array_map(fn($a) => $a->getNombreVues(), $articles));
        $moyVues   = round($totalVues / $total, 1);

        $catMap = [];
        foreach ($articles as $a) {
            $cat = $a->getCategorie() ?? 'Sans catégorie';
            $catMap[$cat] = ($catMap[$cat] ?? 0) + 1;
        }
        arsort($catMap);

        $sorted = $articles;
        usort($sorted, fn($x, $y) => $y->getNombreVues() <=> $x->getNombreVues());
        $top5 = array_map(fn($a) => [
            'id' => $a->getIdArticle(), 'titre' => $a->getTitre(),
            'categorie' => $a->getCategorie(), 'nombre_vues' => $a->getNombreVues(),
            'is_trending' => $a->isTrending(),
        ], array_slice($sorted, 0, 5));

        return $this->json_response(compact('total', 'publie', 'brouillon', 'archive',
            'totalVues', 'moyVues', 'catMap', 'top5') + [
            'total_vues' => $totalVues, 'moy_vues' => $moyVues, 'categories' => $catMap,
        ]);
    }

    #[Route('/categories', name: 'categories', methods: ['GET'])]
    public function categories(ArticleRepository $repo): JsonResponse
    {
        $rows = $repo->createQueryBuilder('a')
            ->select('DISTINCT a.categorie')->where('a.categorie IS NOT NULL')
            ->orderBy('a.categorie', 'ASC')->getQuery()->getResult();
        return $this->json_response(array_values(array_filter(array_column($rows, 'categorie'))));
    }

    #[Route('/trending', name: 'trending', methods: ['GET'])]
    public function trending(Request $request, TrendingService $trendingService): JsonResponse
    {
        $limit    = min(20, max(1, (int) $request->query->get('limit', 5)));
        $articles = $trendingService->getTopTrending($limit);
        return $this->json_response([
            'articles' => array_map(fn($a) => $this->serializeArticle($a), $articles),
            'count'    => count($articles),
        ]);
    }

    #[Route('/trending/refresh', name: 'trending_refresh', methods: ['POST'])]
    public function refreshTrending(TrendingService $trendingService): JsonResponse
    {
        $trendingService->refreshAllScores();
        return $this->json_response(null, true, 'Scores de tendance recalculés avec succès.');
    }

    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id, ArticleRepository $repo): JsonResponse
    {
        $article = $repo->find($id);
        if (!$article) {
            return $this->json_response(null, false, "Article #$id introuvable.", Response::HTTP_NOT_FOUND);
        }
        return $this->json_response($this->serializeArticle($article));
    }

    #[Route('/{id}/view', name: 'increment_view', methods: ['PATCH'], requirements: ['id' => '\d+'])]
    public function incrementView(int $id, ArticleRepository $repo, EntityManagerInterface $em): JsonResponse
    {
        $article = $repo->find($id);
        if (!$article) {
            return $this->json_response(null, false, "Article #$id introuvable.", Response::HTTP_NOT_FOUND);
        }
        $article->setNombreVues($article->getNombreVues() + 1);
        $em->flush();
        return $this->json_response(['id' => $article->getIdArticle(), 'nombre_vues' => $article->getNombreVues()], true, 'Vue enregistrée.');
    }

    #[Route('/{id}/readability', name: 'readability', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function readability(int $id, ArticleRepository $repo, ReadabilityService $readability): JsonResponse
    {
        $article = $repo->find($id);
        if (!$article) {
            return $this->json_response(null, false, "Article #$id introuvable.", Response::HTTP_NOT_FOUND);
        }
        $analysis = $readability->analyze($article->getContenu() ?? '');
        return $this->json_response(array_merge($analysis, [
            'article_id'    => $article->getIdArticle(),
            'article_titre' => $article->getTitre(),
        ]));
    }

    #[Route('/{id}/ai-analyze', name: 'ai_analyze', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function aiAnalyze(int $id, Request $request, ArticleRepository $repo, EntityManagerInterface $em): JsonResponse
    {
        $article = $repo->find($id);
        if (!$article) {
            return $this->json_response(null, false, "Article #$id introuvable.", Response::HTTP_NOT_FOUND);
        }
        $data = json_decode($request->getContent(), true) ?? [];
        if (isset($data['mots_cles']))    $article->setMotsCles($data['mots_cles']);
        if (isset($data['categorie_ia'])) $article->setCategorieIa($data['categorie_ia']);
        if (isset($data['ton_ia']))       $article->setTonIa($data['ton_ia']);
        if (isset($data['resume_ia']))    $article->setResumeIa($data['resume_ia']);
        $em->flush();
        return $this->json_response([
            'id'           => $article->getIdArticle(),
            'mots_cles'    => $article->getMotsClesArray(),
            'categorie_ia' => $article->getCategorieIa(),
            'ton_ia'       => $article->getTonIa(),
            'resume_ia'    => $article->getResumeIa(),
        ], true, 'Analyse IA sauvegardée avec succès.');
    }

    #[Route('/{id}/call-ai', name: 'call_ai', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function callAi(int $id, ArticleRepository $repo): JsonResponse
    {
        $article = $repo->find($id);
        if (!$article) {
            return $this->json_response(null, false, "Article #$id introuvable.", Response::HTTP_NOT_FOUND);
        }

        $apiKey = $_ENV['OPENROUTER_API_KEY'] ?? $_ENV['ANTHROPIC_API_KEY'] ?? '';
        if (!$apiKey) {
            return $this->json_response(null, false,
                "Clé API manquante. Ajoutez OPENROUTER_API_KEY=sk-or-v1-... dans votre fichier .env",
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $titre     = $article->getTitre() ?? '';
        $categorie = $article->getCategorie() ?? '';
        $contenu   = mb_substr(strip_tags($article->getContenu() ?? ''), 0, 2000);

        if (mb_strlen(trim($contenu)) < 50) {
            return $this->json_response(null, false,
                "Contenu trop court. Sauvegardez l'article avec au moins 50 caractères puis réessayez.",
                Response::HTTP_BAD_REQUEST);
        }

        $prompt = "Analyse cet article de blog pour entrepreneurs et réponds UNIQUEMENT en JSON valide, sans texte avant ou après.\n\nTitre: \"$titre\"\nCatégorie: \"$categorie\"\nContenu: \"$contenu\"\n\nRéponds exactement avec ce JSON:\n{\n  \"mots_cles\": \"mot1,mot2,mot3,mot4,mot5\",\n  \"ton_ia\": \"Informatif\",\n  \"categorie_ia\": \"Technologie\",\n  \"resume_ia\": \"Phrase résumé 1. Phrase résumé 2.\"\n}\n\nRègles:\n- mots_cles: exactement 5 mots-clés séparés par des virgules\n- ton_ia: un de: Informatif, Motivant, Technique, Narratif\n- categorie_ia: parmi: Actualité, Technologie, Sport, Culture, Économie, Santé, Coaching, Lifestyle, Autre\n- resume_ia: exactement 2 phrases SEO en français";

        $result = $this->callOpenRouter($prompt, $apiKey, 600);

        if (isset($result['error'])) {
            return $this->json_response(null, false, $result['error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $clean  = trim(preg_replace('/```json|```/', '', $result['text']));
        $parsed = json_decode($clean, true);

        if (!$parsed || !isset($parsed['mots_cles'])) {
            return $this->json_response(null, false, "Réponse IA invalide: " . $result['text'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $this->json_response($parsed);
    }

    // ════════════════════════════════════════════════════════════════
    // NEW 1 — POST /api/articles/generate-draft
    // ────────────────────────────────────────────────────────────────
    // AI Article Generator: Admin provides a title (and optional
    // category/tone), AI writes a full ~300-word article draft.
    //
    // Body (JSON): { titre, categorie?, tone? }
    // Returns: { success, data: { titre, contenu, categorie, mots_cles, resume } }
    //
    // Used by: templates/article/new.html.twig — "✨ Générer un brouillon" button
    // ════════════════════════════════════════════════════════════════
    #[Route('/generate-draft', name: 'generate_draft', methods: ['POST'])]
    public function generateDraft(Request $request): JsonResponse
    {
        $data      = json_decode($request->getContent(), true) ?? [];
        $titre     = trim((string) ($data['titre'] ?? ''));
        $categorie = trim((string) ($data['categorie'] ?? 'Général'));
        $tone      = trim((string) ($data['tone'] ?? 'Informatif'));

        if (mb_strlen($titre) < 5) {
            return $this->json_response(null, false,
                "Le titre est trop court. Entrez au moins 5 caractères.",
                Response::HTTP_BAD_REQUEST);
        }

        $prompt = <<<PROMPT
Tu es un rédacteur expert en contenu pour entrepreneurs et petites entreprises.

Écris un article de blog complet et professionnel sur le sujet suivant.

Titre: "$titre"
Catégorie: $categorie
Ton souhaité: $tone (Informatif = factuel et pédagogique, Motivant = inspirant et dynamique, Technique = précis et détaillé, Narratif = storytelling)

CONTRAINTES IMPORTANTES:
- L'article doit faire entre 280 et 320 mots exactement dans le champ "contenu"
- Rédigé en français, niveau professionnel
- Structure claire avec une introduction, 2-3 paragraphes développés, et une conclusion
- Contenu concret et utile pour un entrepreneur tunisien ou francophone
- Aucun titre de section (h1, h2) dans le contenu — juste des paragraphes fluides

Réponds UNIQUEMENT avec ce JSON valide, aucun texte avant ou après:
{
  "titre": "$titre",
  "contenu": "Texte complet de l'article ici, 280-320 mots, en paragraphes séparés par \\n\\n",
  "categorie": "$categorie",
  "mots_cles": "mot1,mot2,mot3,mot4,mot5",
  "resume": "Résumé SEO de 2 phrases percutantes."
}
PROMPT;

        $result = $this->callOpenRouterFree($prompt, 1200);

        if (isset($result['error'])) {
            return $this->json_response(null, false, $result['error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // ── Robust JSON extraction ───────────────────────────────────────
        // Some free models wrap the JSON in prose. We try 3 strategies:
        // 1) Direct parse after stripping markdown fences
        // 2) Extract the LAST complete {...} block (avoids greedy outer match eating closing })
        // 3) Extract just the fields we need with regex as a last resort
        $raw   = $result['text'];
        $clean = trim(preg_replace('/```json\s*|```/i', '', $raw));

        // Strategy 1 — direct
        $parsed = json_decode($clean, true);

        // Strategy 2 — find last JSON object
        if (!$parsed || !isset($parsed['contenu'])) {
            preg_match_all('/\{(?:[^{}]|(?R))*\}/s', $clean, $m2);
            if (!empty($m2[0])) {
                foreach (array_reverse($m2[0]) as $candidate) {
                    $p = json_decode($candidate, true);
                    if ($p && isset($p['contenu'])) { $parsed = $p; break; }
                }
            }
        }

        // Strategy 3 — brute force field extraction
        if (!$parsed || !isset($parsed['contenu'])) {
            $extractField = function(string $field, string $text): string {
                if (preg_match('/"' . $field . '"\s*:\s*"((?:[^\\"]|\\.)*)"/', $text, $m)) {
                    return stripslashes($m[1]);
                }
                return '';
            };
            $contenuRaw = $extractField('contenu', $clean);
            if ($contenuRaw !== '') {
                $parsed = [
                    'titre'     => $extractField('titre', $clean) ?: $titre,
                    'contenu'   => $contenuRaw,
                    'categorie' => $extractField('categorie', $clean) ?: $categorie,
                    'mots_cles' => $extractField('mots_cles', $clean),
                    'resume'    => $extractField('resume', $clean),
                ];
            }
        }

        if (!$parsed || !isset($parsed['contenu']) || mb_strlen(trim($parsed['contenu'])) < 50) {
            return $this->json_response(null, false,
                "La génération a échoué — réponse inattendue du modèle: " . mb_substr($raw, 0, 300),
                Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Normalize categorie to match the form's exact option values
        $validCategories = ['Actualité','Technologie','Sport','Culture','Économie','Santé','Coaching','Lifestyle','Autre'];
        $returnedCat = $parsed['categorie'] ?? $categorie;
        if (!in_array($returnedCat, $validCategories, true)) {
            // Try case-insensitive match
            foreach ($validCategories as $vc) {
                if (mb_strtolower($vc) === mb_strtolower($returnedCat)) {
                    $returnedCat = $vc;
                    break;
                }
            }
            // If still no match, fall back to the user's selected category
            if (!in_array($returnedCat, $validCategories, true)) {
                $returnedCat = $categorie;
            }
        }

        $wordCount = str_word_count(strip_tags($parsed['contenu']));

        return $this->json_response([
            'titre'     => trim($parsed['titre'] ?? $titre),
            'contenu'   => trim($parsed['contenu']),
            'categorie' => $returnedCat,
            'mots_cles' => $parsed['mots_cles'] ?? '',
            'resume'    => $parsed['resume']    ?? '',
            'word_count'=> $wordCount,
        ]);
    }

    // ════════════════════════════════════════════════════════════════
    // NEW 2 — POST /api/articles/moderate-avis
    // ────────────────────────────────────────────────────────────────
    // AI Avis Moderation: Before saving a user's avis/review,
    // the AI checks for offensive language, spam, or irrelevant content.
    //
    // Body (JSON): { avis, article_titre? }
    // Returns: { success, data: { decision: "approved"|"rejected",
    //            reason, confidence, severity? } }
    //
    // Used by: templates/blog/show.html.twig — called inside submitAvis()
    // before the avis is sent to /blog/{id}/react
    // ════════════════════════════════════════════════════════════════
    #[Route('/moderate-avis', name: 'moderate_avis', methods: ['POST'])]
    public function moderateAvis(Request $request): JsonResponse
    {
        $apiKey = $_ENV['OPENROUTER_API_KEY'] ?? $_ENV['ANTHROPIC_API_KEY'] ?? '';
        if (!$apiKey) {
            // If no API key, approve by default (fail open — never block users silently)
            return $this->json_response([
                'decision'   => 'approved',
                'reason'     => 'Modération IA non configurée — approuvé par défaut.',
                'confidence' => 100,
            ]);
        }

        $data          = json_decode($request->getContent(), true) ?? [];
        $avis          = trim((string) ($data['avis'] ?? ''));
        $articleTitre  = trim((string) ($data['article_titre'] ?? ''));

        if (mb_strlen($avis) < 2) {
            return $this->json_response([
                'decision'   => 'rejected',
                'reason'     => 'L\'avis est trop court.',
                'confidence' => 100,
            ]);
        }

        $prompt = <<<PROMPT
Tu es un modérateur de contenu pour une plateforme d'entrepreneurs professionnels.

Analyse cet avis soumis par un utilisateur sur un article de blog.
Article concerné: "$articleTitre"
Avis soumis: "$avis"

Critères de REJET (si l'un est présent → rejeter):
1. Langage offensant, insultes, grossièretés, discours haineux
2. Spam, publicité déguisée, liens URL, promotions
3. Contenu totalement hors sujet ou sans rapport avec l'article
4. Contenu vide de sens ou répétition aléatoire de caractères

Critères d'APPROBATION:
- Avis constructif, même négatif
- Critique honnête et respectueuse
- Question ou commentaire pertinent sur le contenu

Réponds UNIQUEMENT avec ce JSON valide:
{
  "decision": "approved",
  "reason": "Explication courte en français (max 15 mots)",
  "confidence": 95,
  "severity": "none"
}

Valeurs possibles:
- decision: "approved" ou "rejected"
- confidence: 0-100 (à quel point tu es sûr)
- severity: "none" si approuvé, ou "low"/"medium"/"high" si rejeté selon la gravité
PROMPT;

        $result = $this->callOpenRouterFree($prompt, 300);

        // If AI call fails, approve by default (never silently block)
        if (isset($result['error'])) {
            return $this->json_response([
                'decision'   => 'approved',
                'reason'     => 'Modération temporairement indisponible — approuvé.',
                'confidence' => 50,
            ]);
        }

        $clean  = trim(preg_replace('/```json|```/i', '', $result['text']));
        if (!str_starts_with($clean, '{')) {
            preg_match('/\{[\s\S]*\}/m', $clean, $matches);
            $clean = $matches[0] ?? $clean;
        }

        $parsed = json_decode($clean, true);

        // Sanity check — if parse fails, approve
        if (!$parsed || !isset($parsed['decision'])) {
            return $this->json_response([
                'decision'   => 'approved',
                'reason'     => 'Analyse non concluante — approuvé.',
                'confidence' => 50,
            ]);
        }

        // Enforce valid decision values only
        if (!in_array($parsed['decision'], ['approved', 'rejected'], true)) {
            $parsed['decision'] = 'approved';
        }

        return $this->json_response([
            'decision'   => $parsed['decision'],
            'reason'     => $parsed['reason']     ?? '',
            'confidence' => (int) ($parsed['confidence'] ?? 80),
            'severity'   => $parsed['severity']   ?? 'none',
        ]);
    }
}