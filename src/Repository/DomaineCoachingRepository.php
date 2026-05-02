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
     * Search domains by name/description with optional niveau filter and sorting.
     */
    public function searchWithFilters(string $q = '', string $niveau = '', string $sort = 'nom', string $dir = 'asc'): array
    {
        $qb = $this->createQueryBuilder('d');

        if ($q) {
            $qb->andWhere('d.nomDomaine LIKE :q OR d.description LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }

        if ($niveau) {
            $qb->andWhere('d.niveauDifficulte = :niveau')
               ->setParameter('niveau', $niveau);
        }

        $dir = strtoupper($dir) === 'DESC' ? 'DESC' : 'ASC';
        $sortMap = [
            'nom'    => 'd.nomDomaine',
            'niveau' => 'd.niveauDifficulte',
            'duree'  => 'd.dureeFormationHeures',
        ];
        $orderBy = $sortMap[$sort] ?? 'd.nomDomaine';
        $qb->orderBy($orderBy, $dir);

        return $qb->getQuery()->getResult();
    }

    /**
     * Search domains by name or description (legacy).
     */
    public function search(string $q = ''): array
    {
        return $this->searchWithFilters($q);
    }

    /**
     * Count coaches per domain.
     */
    public function countCoachesPerDomain(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $rows = $conn->fetchAllAssociative(
            'SELECT dc.id_domaine, COUNT(c.id_coach) as nb_coaches
             FROM domaine_coaching dc
             LEFT JOIN coach c ON c.id_domaine = dc.id_domaine
             GROUP BY dc.id_domaine
             ORDER BY dc.nom_domaine'
        );

        $result = [];
        foreach ($rows as $row) {
            $result[$row['id_domaine']] = (int) $row['nb_coaches'];
        }
        return $result;
    }

    /**
     * Statistics for the stats dashboard.
     */
    public function getStats(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $total = (int) $conn->fetchOne('SELECT COUNT(*) FROM domaine_coaching');

        $byLevel = $conn->fetchAllAssociative(
            'SELECT niveau_difficulte, COUNT(*) as cnt
             FROM domaine_coaching
             GROUP BY niveau_difficulte
             ORDER BY FIELD(niveau_difficulte, \'Débutant\', \'Intermédiaire\', \'Expert\')'
        );

        $dureeRow = $conn->fetchAssociative(
            'SELECT AVG(duree_formation_heures) as avg_duree,
                    MAX(duree_formation_heures) as max_duree,
                    MIN(duree_formation_heures) as min_duree
             FROM domaine_coaching
             WHERE duree_formation_heures IS NOT NULL'
        );

        $maxRow = $conn->fetchAssociative(
            'SELECT nom_domaine, duree_formation_heures
             FROM domaine_coaching
             WHERE duree_formation_heures = (SELECT MAX(duree_formation_heures) FROM domaine_coaching)
             LIMIT 1'
        );

        $minRow = $conn->fetchAssociative(
            'SELECT nom_domaine, duree_formation_heures
             FROM domaine_coaching
             WHERE duree_formation_heures = (SELECT MIN(duree_formation_heures) FROM domaine_coaching WHERE duree_formation_heures IS NOT NULL)
             LIMIT 1'
        );

        $coachByDomain = $conn->fetchAllAssociative(
            'SELECT dc.nom_domaine, COUNT(c.id_coach) as nb_coaches
             FROM domaine_coaching dc
             LEFT JOIN coach c ON c.id_domaine = dc.id_domaine
             GROUP BY dc.id_domaine, dc.nom_domaine
             ORDER BY nb_coaches DESC'
        );

        return [
            'total'          => $total,
            'byLevel'        => $byLevel,
            'avgDuree'       => $dureeRow['avg_duree'] ? (int) round((float) $dureeRow['avg_duree']) : null,
            'maxDuree'       => $dureeRow['max_duree'] ? (int) $dureeRow['max_duree'] : null,
            'minDuree'       => $dureeRow['min_duree'] ? (int) $dureeRow['min_duree'] : null,
            'plusLong'       => $maxRow ?: null,
            'moinsCourt'     => $minRow ?: null,
            'coachByDomain'  => $coachByDomain,
        ];
    }
}
