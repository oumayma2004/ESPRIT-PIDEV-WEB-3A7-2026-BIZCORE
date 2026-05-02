<?php

namespace App\Repository;

use App\Entity\Coach;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Coach>
 */
class CoachRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coach::class);
    }

    /**
     * Alias used by AdminCoachController — domaine is a plain string column, no join needed.
     * Returns all coaches sorted by nom then prenom.
     * @return Coach[]
     */
    public function findAllWithDomaine(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.nom', 'ASC')
            ->addOrderBy('c.prenom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find a coach by full name (case-insensitive)
     */
    public function findByFullName(string $nom, string $prenom, ?int $excludeId = null): ?Coach
    {
        $qb = $this->createQueryBuilder('c')
            ->where('LOWER(c.nom) = :nom')
            ->andWhere('LOWER(c.prenom) = :prenom')
            ->setParameter('nom', strtolower(trim($nom)))
            ->setParameter('prenom', strtolower(trim($prenom)));

        if ($excludeId) {
            $qb->andWhere('c.idCoach != :id')
                ->setParameter('id', $excludeId);
        }

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * Find all available coaches
     * @return Coach[]
     */
    public function findAvailable(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.disponibilite = :dispo')
            ->setParameter('dispo', 'Disponible')
            ->orderBy('c.noteMoyenne', 'DESC')
            ->addOrderBy('c.tarifHoraire', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find coaches by domain
     * @return Coach[]
     */
    public function findByDomain(string $domaine): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.domaine = :domaine')
            ->setParameter('domaine', $domaine)
            ->orderBy('c.noteMoyenne', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search coaches with filters
     * @return Coach[]
     */
    public function searchCoaches(?string $domaine = null, ?float $maxTarif = null, bool $onlyAvailable = false): array
    {
        $qb = $this->createQueryBuilder('c');

        if ($domaine) {
            $qb->andWhere('c.domaine = :domaine')
                ->setParameter('domaine', $domaine);
        }

        if ($maxTarif !== null) {
            $qb->andWhere('c.tarifHoraire <= :maxTarif')
                ->setParameter('maxTarif', $maxTarif);
        }

        if ($onlyAvailable) {
            $qb->andWhere('c.disponibilite = :dispo')
                ->setParameter('dispo', 'Disponible');
        }

        return $qb
            ->orderBy('c.noteMoyenne', 'DESC')
            ->addOrderBy('c.tarifHoraire', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get statistics by domain
     * @return array<int, array{domaine: string|null, total: int, avgNote: string|null}>
     */
    public function getStatsByDomain(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.domaine, COUNT(c.idCoach) as total, AVG(c.noteMoyenne) as avgNote')
            ->groupBy('c.domaine')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Advanced multi-criteria filter with sort — used by the Ajax filter endpoint.
     * @return Coach[]
     */
    public function findByAdvancedFilters(
        string  $q             = '',
        string  $domaine       = '',
        string  $disponibilite = '',
        ?float  $maxTarif      = null,
        ?float  $minNote       = null,
        ?int    $minExperience = null,
        string  $sort          = 'nom_asc'
    ): array {
        $qb = $this->createQueryBuilder('c');

        if ($q !== '') {
            $qb->andWhere('c.nom LIKE :q OR c.prenom LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }
        if ($domaine !== '') {
            $qb->andWhere('c.domaine = :domaine')
               ->setParameter('domaine', $domaine);
        }
        if ($disponibilite !== '') {
            $qb->andWhere('c.disponibilite = :dispo')
               ->setParameter('dispo', $disponibilite);
        }
        if ($maxTarif !== null) {
            $qb->andWhere('c.tarifHoraire <= :maxTarif')
               ->setParameter('maxTarif', $maxTarif);
        }
        if ($minNote !== null) {
            $qb->andWhere('c.noteMoyenne >= :minNote')
               ->setParameter('minNote', $minNote);
        }
        if ($minExperience !== null) {
            $qb->andWhere('c.experienceAnnees >= :minExp')
               ->setParameter('minExp', $minExperience);
        }

        match ($sort) {
            'tarif_asc'  => $qb->orderBy('c.tarifHoraire', 'ASC')->addOrderBy('c.nom', 'ASC'),
            'tarif_desc' => $qb->orderBy('c.tarifHoraire', 'DESC')->addOrderBy('c.nom', 'ASC'),
            'note_desc'  => $qb->orderBy('c.noteMoyenne', 'DESC')->addOrderBy('c.nom', 'ASC'),
            'exp_desc'   => $qb->orderBy('c.experienceAnnees', 'DESC')->addOrderBy('c.nom', 'ASC'),
            default      => $qb->orderBy('c.nom', 'ASC')->addOrderBy('c.prenom', 'ASC'),
        };

        return $qb->getQuery()->getResult();
    }

    /**
     * Return all distinct non-null domain values, sorted alphabetically.
     * @return string[]
     */
    public function getDistinctDomaines(): array
    {
        $rows = $this->createQueryBuilder('c')
            ->select('DISTINCT c.domaine')
            ->where('c.domaine IS NOT NULL')
            ->orderBy('c.domaine', 'ASC')
            ->getQuery()
            ->getArrayResult();

        return array_column($rows, 'domaine');
    }

    /**
     * Search coaches with admin filters (database-level for performance)
     * @return Coach[]
     */
    public function searchWithFilters(string $q = '', string $domaine = '', string $dispo = ''): array
    {
        $qb = $this->createQueryBuilder('c')
            ->orderBy('c.nom', 'ASC');

        if ($q) {
            $qb->andWhere('c.nom LIKE :q OR c.prenom LIKE :q')
                ->setParameter('q', '%' . $q . '%');
        }
        if ($domaine) {
            $qb->andWhere('c.domaine = :domaine')
                ->setParameter('domaine', $domaine);
        }
        if ($dispo) {
            $qb->andWhere('c.disponibilite = :dispo')
                ->setParameter('dispo', $dispo);
        }

        return $qb->getQuery()->getResult();
    }
}
