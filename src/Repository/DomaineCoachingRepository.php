<?php

namespace App\Repository;

use App\Entity\DomaineCoaching;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DomaineCoachingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DomaineCoaching::class);
    }

    /**
     * Find all domains ordered by name.
     */
    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.nomDomaine', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search domains by name or description.
     */
    public function search(string $q = ''): array
    {
        $qb = $this->createQueryBuilder('d')
            ->orderBy('d.nomDomaine', 'ASC');

        if ($q) {
            $qb->andWhere('d.nomDomaine LIKE :q OR d.description LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Count coaches per domain (using raw SQL since coach.domaine is a string).
     */
    public function countCoachesPerDomain(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $rows = $conn->fetchAllAssociative(
            'SELECT dc.id_domaine, dc.nom_domaine, COUNT(c.id_coach) as nb_coaches
             FROM domaine_coaching dc
             LEFT JOIN coach c ON c.id_domaine = dc.id_domaine
             GROUP BY dc.id_domaine, dc.nom_domaine
             ORDER BY dc.nom_domaine'
        );

        $result = [];
        foreach ($rows as $row) {
            $result[$row['id_domaine']] = (int) $row['nb_coaches'];
        }
        return $result;
    }
}
