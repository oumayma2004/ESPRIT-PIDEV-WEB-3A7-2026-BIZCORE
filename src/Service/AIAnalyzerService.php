<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AIAnalyzerService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function analyzeComments(array $comments): array
    {
        if (empty($comments)) {
            return [
                'rating'   => 0,
                'positive' => 0,
                'neutral'  => 0,
                'negative' => 0,
                'summary'  => 'Aucun commentaire à analyser.',
            ];
        }

        $positiveWords = [
            'excellent', 'super', 'magnifique', 'parfait', 'bravo', 'génial', 'incroyable',
            'fantastique', 'merveilleux', 'top', 'bien', 'bon', 'bonne', 'très bien',
            'j\'aime', 'adore', 'formidable', 'exceptionnel', 'great', 'good', 'amazing',
            'awesome', 'love', 'best', 'nice', 'cool', 'super', 'wow', 'parfaitement',
            'recommande', 'satisfait', 'content', 'heureux', 'agréable', 'positif',
            'enrichissant', 'intéressant', 'utile', 'efficace', 'qualité', 'professionnel'
        ];

        $negativeWords = [
            'mauvais', 'nul', 'horrible', 'catastrophe', 'déçu', 'décevant', 'problème',
            'ennuyeux', 'cher', 'trop cher', 'mal', 'médiocre', 'insuffisant', 'manque',
            'bad', 'poor', 'terrible', 'awful', 'hate', 'worst', 'boring', 'expensive',
            'disappointing', 'disappointed', 'pas bien', 'pas bon', 'dommage', 'regret',
            'inutile', 'inefficace', 'désorganisé', 'retard', 'annulé', 'difficile'
        ];

        $positiveCount = 0;
        $negativeCount = 0;
        $totalWords    = 0;
        $scores        = [];

        foreach ($comments as $comment) {
            $lower = mb_strtolower($comment);
            $pos   = 0;
            $neg   = 0;

            foreach ($positiveWords as $word) {
                if (str_contains($lower, $word)) {
                    $pos++;
                }
            }
            foreach ($negativeWords as $word) {
                if (str_contains($lower, $word)) {
                    $neg++;
                }
            }

            $positiveCount += $pos;
            $negativeCount += $neg;

            // Score per comment: 1-5
            if ($pos > $neg) {
                $scores[] = min(5, 3 + $pos - $neg);
            } elseif ($neg > $pos) {
                $scores[] = max(1, 3 - ($neg - $pos));
            } else {
                $scores[] = 3;
            }
        }

        $total    = count($comments);
        $avgScore = $total > 0 ? array_sum($scores) / $total : 3;

        // Calculate sentiment percentages
        $totalSentiment = $positiveCount + $negativeCount;
        if ($totalSentiment > 0) {
            $posPercent = (int) round(($positiveCount / $totalSentiment) * 100);
            $negPercent = (int) round(($negativeCount / $totalSentiment) * 100);
        } else {
            $posPercent = 50;
            $negPercent = 10;
        }
        $neuPercent = max(0, 100 - $posPercent - $negPercent);

        // Generate summary
        $rating = round($avgScore, 1);
        if ($rating >= 4.5) {
            $summary = "Excellents retours ! Les participants sont très satisfaits de l'événement.";
        } elseif ($rating >= 3.5) {
            $summary = "Bons commentaires globalement. L'événement a été bien apprécié.";
        } elseif ($rating >= 2.5) {
            $summary = "Avis mitigés. Des points d'amélioration ont été soulevés.";
        } elseif ($rating >= 1.5) {
            $summary = "Commentaires négatifs dominants. Des améliorations importantes sont nécessaires.";
        } else {
            $summary = "Très mauvais retours. L'événement n'a pas répondu aux attentes.";
        }

        $summary .= " ($total commentaire(s) analysé(s))";

        return [
            'rating'   => $rating,
            'positive' => $posPercent,
            'neutral'  => $neuPercent,
            'negative' => $negPercent,
            'summary'  => $summary,
        ];
    }
}