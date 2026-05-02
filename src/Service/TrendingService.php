<?php

namespace App\Service;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Repository\ArticleReactionRepository;
use Doctrine\ORM\EntityManagerInterface;

/**
 * TrendingService — Métier Avancé 2
 *
 * Calculates a "trending score" for each article based on:
 *   - View velocity : how many views in the last 48h vs. total views
 *   - Reaction velocity : reactions received per hour in the last 48h
 *
 * Formula:
 *   score = (recent_views / max(total_views, 1)) * 50
 *         + (recent_reactions * 5)
 *         + log(total_views + 1) * 2
 *
 * An article is considered "trending" when score >= 10.0
 * The score is stored in article.trending_score and refreshed on demand.
 */
class TrendingService
{
    public function __construct(
        private ArticleRepository         $articleRepo,
        private ArticleReactionRepository $reactionRepo,
        private EntityManagerInterface    $em
    ) {}

    /**
     * Recalculate and persist trending scores for ALL articles.
     * Call this from a controller or a Symfony command/cron.
     */
    public function refreshAllScores(): void
    {
        $articles  = $this->articleRepo->findAll();
        $now       = new \DateTimeImmutable();
        $cutoff48h = $now->modify('-48 hours');

        // Get recent reaction counts per article (last 48h)
        $recentReactions = $this->reactionRepo->countRecentByArticle($cutoff48h);
        // Returns: [ id_article => count ]

        foreach ($articles as $article) {
            $score = $this->computeScore($article, $recentReactions, $cutoff48h);
            $article->setTrendingScore($score);
            $article->setTrendingUpdatedAt($now);
        }

        $this->em->flush();
    }

    /**
     * Compute score for a single article.
     * $recentReactions = [ id_article => count ] pre-fetched for efficiency.
     */
    public function computeScore(
        Article $article,
        array $recentReactions,
        \DateTimeImmutable $cutoff48h
    ): float {
        $totalViews     = max($article->getNombreVues(), 1);
        $recentViews    = $this->articleRepo->countViewsSince($article->getIdArticle(), $cutoff48h);
        $recentReact    = $recentReactions[$article->getIdArticle()] ?? 0;

        // View velocity component (0–50 points)
        $viewVelocity   = ($recentViews / $totalViews) * 50;

        // Reaction velocity component (5 points per recent reaction)
        $reactVelocity  = $recentReact * 5;

        // Base popularity component (logarithmic, so huge articles don't dominate)
        $basePopularity = log($totalViews + 1) * 2;

        $score = $viewVelocity + $reactVelocity + $basePopularity;

        return round($score, 2);
    }

    /**
     * Returns articles sorted by trending_score DESC, limited to $limit.
     * Used by the blog index to show the trending section.
     */
    public function getTopTrending(int $limit = 5): array
    {
        return $this->articleRepo->findTopTrending($limit);
    }
}
