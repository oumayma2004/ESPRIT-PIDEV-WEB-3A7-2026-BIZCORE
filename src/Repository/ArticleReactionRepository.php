<?php

namespace App\Repository;

use App\Entity\ArticleReaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticleReaction>
 */
class ArticleReactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleReaction::class);
    }

    /**
     * Find one reaction by user + article + type (for toggle check).
     */
    public function findOneByUserArticleType(int $userId, int $articleId, string $type): ?ArticleReaction
    {
        return $this->createQueryBuilder('r')
            ->where('r.id_user = :u')
            ->andWhere('r.id_article = :a')
            ->andWhere('r.type_reaction = :t')
            ->setParameter('u', $userId)
            ->setParameter('a', $articleId)
            ->setParameter('t', $type)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * All reactions for one article, newest first.
     */
    public function findByArticle(int $articleId): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.id_article = :a')
            ->setParameter('a', $articleId)
            ->orderBy('r.date_reaction', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Counts per type for one article.
     * Returns: [['type_reaction' => 'like', 'total' => 5], ...]
     */
    public function countByTypeForArticle(int $articleId): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.type_reaction, COUNT(r.id_reaction) AS total')
            ->where('r.id_article = :a')
            ->setParameter('a', $articleId)
            ->groupBy('r.type_reaction')
            ->getQuery()
            ->getResult();
    }

    /**
     * Average note (stars) for one article. Returns null if no notes given.
     */
    public function averageNoteForArticle(int $articleId): ?float
    {
        $result = $this->createQueryBuilder('r')
            ->select('AVG(r.note)')
            ->where('r.id_article = :a')
            ->andWhere('r.note IS NOT NULL')
            ->setParameter('a', $articleId)
            ->getQuery()
            ->getSingleScalarResult();

        return $result !== null ? round((float) $result, 1) : null;
    }

    /**
     * All reactions left by a specific user (for "my activity" view).
     */
    public function findByUser(int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.id_user = :u')
            ->setParameter('u', $userId)
            ->orderBy('r.date_reaction', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Global stats across ALL articles — used by the admin API.
     */
    public function globalStats(): array
    {
        $rows = $this->createQueryBuilder('r')
            ->select('r.type_reaction, COUNT(r.id_reaction) AS total')
            ->groupBy('r.type_reaction')
            ->getQuery()
            ->getResult();

        $stats = ['like' => 0, 'bookmark' => 0, 'share' => 0, 'helpful' => 0, 'total' => 0];
        foreach ($rows as $row) {
            $stats[$row['type_reaction']] = (int) $row['total'];
            $stats['total'] += (int) $row['total'];
        }
        return $stats;
    }
}
