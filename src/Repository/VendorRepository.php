<?php

namespace App\Repository;

use App\Entity\Vendor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator; // ✅ Ajoute en haut du fichier


class VendorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vendor::class);
    }

    /**
     * Retourne tous les vendeurs avec le nombre de produits associés.
     */
    public function findAllWithProductCount(int $page = 1, int $pageSize = 50): array
    {
        // Query 1 — paginated vendors
        $vendors = $this->createQueryBuilder('v')
            ->orderBy('v.nom', 'ASC')
            ->setFirstResult(($page - 1) * $pageSize)
            ->setMaxResults($pageSize)
            ->getQuery()
            ->getResult();

        if (empty($vendors)) {
            return [];
        }

        // Query 2 — product count per vendor
        $ids = array_map(fn($v) => $v->getId(), $vendors);

        $counts = $this->createQueryBuilder('v')
            ->select('v.id', 'COUNT(p.idProduit) AS productCount')
            ->leftJoin('v.products', 'p')
            ->where('v.id IN (:ids)')
            ->setParameter('ids', $ids)
            ->groupBy('v.id')
            ->getQuery()
            ->getResult();

        // Index by vendor id
        $countMap = [];
        foreach ($counts as $row) {
            $countMap[$row['id']] = (int) $row['productCount'];
        }

        // Assemble result
        return array_map(fn($vendor) => [
            'vendor' => $vendor,
            'productCount' => $countMap[$vendor->getId()] ?? 0,
        ], $vendors);
    }
    public function save(Vendor $vendor, bool $flush = false): void
    {
        $this->getEntityManager()->persist($vendor);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Vendor $vendor, bool $flush = false): void
    {
        $this->getEntityManager()->remove($vendor);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Recherche de vendeurs par nom ou email.
     */
    public function search(string $query, int $page = 1, int $pageSize = 50): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.nom LIKE :q OR v.email LIKE :q')
            ->setParameter('q', '%' . $query . '%')
            ->orderBy('v.nom', 'ASC')
            ->setFirstResult(($page - 1) * $pageSize)
            ->setMaxResults($pageSize)
            ->getQuery()
            ->getResult();
    }

    /**
     * Vendeurs actifs uniquement.
     */
    public function findActifs(int $page = 1, int $pageSize = 50): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.statut = :statut')
            ->setParameter('statut', 'actif')
            ->orderBy('v.nom', 'ASC')
            ->setFirstResult(($page - 1) * $pageSize)
            ->setMaxResults($pageSize)
            ->getQuery()
            ->getResult();
    }
}