<?php

namespace App\Model;

use Symfony\Component\Process\Process;

class CommentaireAnalysisModel
{
    private const POSITIVE_WORDS = [
        'excellent', 'super', 'magnifique', 'parfait', 'bravo', 'genial', 'incroyable',
        'fantastique', 'merveilleux', 'top', 'bien', 'bon', 'bonne', 'tres bien',
        'j aime', 'adore', 'formidable', 'exceptionnel', 'great', 'good', 'amazing',
        'awesome', 'love', 'best', 'nice', 'cool', 'wow', 'parfaitement',
        'recommande', 'satisfait', 'content', 'heureux', 'agreable', 'positif',
        'enrichissant', 'interessant', 'utile', 'efficace', 'qualite', 'professionnel',
    ];

    private const NEGATIVE_WORDS = [
        'mauvais', 'nul', 'horrible', 'catastrophe', 'decu', 'decevant', 'probleme',
        'ennuyeux', 'cher', 'trop cher', 'mal', 'mediocre', 'insuffisant', 'manque',
        'bad', 'poor', 'terrible', 'awful', 'hate', 'worst', 'boring', 'expensive',
        'disappointing', 'disappointed', 'pas bien', 'pas bon', 'dommage', 'regret',
        'inutile', 'inefficace', 'desorganise', 'retard', 'annule', 'difficile',
    ];

    public function __construct(
        private readonly string $projectDir,
    ) {
    }

    public function predictMany(array $comments): array
    {
        return $this->predictWithPython($comments) ?? $this->predictWithPhpFallback($comments);
    }

    private function predictWithPython(array $comments): ?array
    {
        $script = $this->projectDir . '/ai_models/commentaire_analysis_model.py';

        if (!is_file($script)) {
            return null;
        }

        foreach ($this->pythonCommands($script) as $command) {
            $process = new Process($command, $this->projectDir);
            $process->setInput(json_encode(['comments' => $comments], JSON_UNESCAPED_UNICODE));
            $process->setTimeout(15);

            try {
                $process->run();
            } catch (\Throwable) {
                continue;
            }

            if (!$process->isSuccessful()) {
                continue;
            }

            $result = json_decode($process->getOutput(), true);

            if (is_array($result) && isset($result['rating'], $result['summary'])) {
                return $result;
            }
        }

        return null;
    }

    private function pythonCommands(string $script): array
    {
        $commands = [];
        $configuredBinary = $_ENV['PYTHON_BINARY'] ?? $_SERVER['PYTHON_BINARY'] ?? null;

        if ($configuredBinary) {
            $commands[] = [$configuredBinary, $script];
        }

        $commands[] = ['python', $script];
        $commands[] = ['python3', $script];
        $commands[] = ['py', '-3', $script];

        return $commands;
    }

    private function predictWithPhpFallback(array $comments): array
    {
        $comments = array_values(array_filter(
            array_map(static fn ($comment) => trim((string) $comment), $comments),
            static fn (string $comment) => $comment !== ''
        ));

        if ($comments === []) {
            return [
                'rating' => 0.0,
                'positive' => 0,
                'neutral' => 0,
                'negative' => 0,
                'summary' => 'Aucun commentaire a analyser.',
                'comments' => [],
                'model' => 'php-fallback-commentaire-analysis-v1',
            ];
        }

        $predictions = array_map(fn (string $comment) => $this->predictOneWithPhp($comment), $comments);
        $total = count($predictions);
        $positive = count(array_filter($predictions, static fn (array $p) => $p['sentiment'] === 'positive'));
        $negative = count(array_filter($predictions, static fn (array $p) => $p['sentiment'] === 'negative'));
        $neutral = $total - $positive - $negative;
        $rating = round(array_sum(array_column($predictions, 'score')) / $total, 1);

        return [
            'rating' => $rating,
            'positive' => (int) round(($positive / $total) * 100),
            'neutral' => (int) round(($neutral / $total) * 100),
            'negative' => (int) round(($negative / $total) * 100),
            'summary' => $this->buildSummary($rating, $total),
            'comments' => $predictions,
            'model' => 'php-fallback-commentaire-analysis-v1',
        ];
    }

    private function predictOneWithPhp(string $comment): array
    {
        $normalized = $this->normalize($comment);
        $positiveHits = $this->countHits($normalized, self::POSITIVE_WORDS);
        $negativeHits = $this->countHits($normalized, self::NEGATIVE_WORDS);
        $rawScore = $positiveHits - $negativeHits;

        if ($rawScore > 0) {
            $sentiment = 'positive';
            $score = min(5, 3 + $rawScore);
        } elseif ($rawScore < 0) {
            $sentiment = 'negative';
            $score = max(1, 3 + $rawScore);
        } else {
            $sentiment = 'neutral';
            $score = 3;
        }

        return [
            'text' => $comment,
            'sentiment' => $sentiment,
            'score' => $score,
            'positive_hits' => $positiveHits,
            'negative_hits' => $negativeHits,
        ];
    }

    private function countHits(string $text, array $words): int
    {
        $hits = 0;

        foreach ($words as $word) {
            if (str_contains($text, $word)) {
                $hits++;
            }
        }

        return $hits;
    }

    private function normalize(string $text): string
    {
        $text = mb_strtolower($text);
        $text = strtr($text, [
            'à' => 'a', 'â' => 'a', 'ä' => 'a',
            'ç' => 'c',
            'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
            'î' => 'i', 'ï' => 'i',
            'ô' => 'o', 'ö' => 'o',
            'ù' => 'u', 'û' => 'u', 'ü' => 'u',
            'ÿ' => 'y',
            "'" => ' ',
        ]);

        return preg_replace('/\s+/', ' ', $text) ?? $text;
    }

    private function buildSummary(float $rating, int $total): string
    {
        if ($rating >= 4.5) {
            $summary = "Excellents retours. Les participants sont tres satisfaits de l'evenement.";
        } elseif ($rating >= 3.5) {
            $summary = "Bons commentaires globalement. L'evenement a ete bien apprecie.";
        } elseif ($rating >= 2.5) {
            $summary = "Avis mitiges. Des points d'amelioration ont ete souleves.";
        } elseif ($rating >= 1.5) {
            $summary = "Commentaires negatifs dominants. Des ameliorations importantes sont necessaires.";
        } else {
            $summary = "Tres mauvais retours. L'evenement n'a pas repondu aux attentes.";
        }

        return $summary . " ($total commentaire(s) analyse(s))";
    }
}
