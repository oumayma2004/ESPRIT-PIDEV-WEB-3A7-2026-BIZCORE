<?php

namespace App\Repository;

use App\Entity\SignalementArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SignalementArticle>
 */
class SignalementArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SignalementArticle::class);
    }

    /**
     * Check if a user already reported a specific article (unique constraint guard).
     */
    public function hasUserReported(int $userId, int $articleId): bool
    {
        return (bool) $this->createQueryBuilder('s')
            ->select('COUNT(s.id_signalement)')
            ->where('s.id_user = :u')
            ->andWhere('s.id_article = :a')
            ->setParameter('u', $userId)
            ->setParameter('a', $articleId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * All signalements by one user, newest first.
     * Used in the user CRUD "mes signalements" page.
     */
    public function findByUser(int $userId): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.id_user = :u')
            ->setParameter('u', $userId)
            ->orderBy('s.date_signalement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * All signalements for one article (admin view).
     */
    public function findByArticle(int $articleId): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.id_article = :a')
            ->setParameter('a', $articleId)
            ->orderBy('s.date_signalement', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Count pending signalements across all articles (admin dashboard KPI).
     */
    public function countEnAttente(): int
    {
        return (int) $this->createQueryBuilder('s')
            ->select('COUNT(s.id_signalement)')
            ->where('s.statut = :s')
            ->setParameter('s', SignalementArticle::STATUT_EN_ATTENTE)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Count signalements per article — for admin article list.
     * Returns: [ ['id_article' => X, 'total' => N], ... ]
     */
    public function countPerArticle(): array
    {
        return $this->createQueryBuilder('s')
            ->select('s.id_article, COUNT(s.id_signalement) AS total')
            ->groupBy('s.id_article')
            ->getQuery()
            ->getResult();
    }

    /**
     * Global stats: total, by motif, by statut.
     */
    public function globalStats(): array
    {
        $all = $this->findAll();

        $byMotif  = [];
        $byStatut = [
            SignalementArticle::STATUT_EN_ATTENTE => 0,
            SignalementArticle::STATUT_TRAITE     => 0,
            SignalementArticle::STATUT_REJETE     => 0,
        ];

        foreach ($all as $s) {
            $byMotif[$s->getMotif()] = ($byMotif[$s->getMotif()] ?? 0) + 1;
            $byStatut[$s->getStatut()] = ($byStatut[$s->getStatut()] ?? 0) + 1;
        }

        return [
            'total'     => count($all),
            'by_motif'  => $byMotif,
            'by_statut' => $byStatut,
        ];
    }
}
