<?php

namespace App\Repository;

use App\Entity\Vendor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class VendorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vendor::class);
    }

    /**
     * Retourne tous les vendeurs avec le nombre de produits associés.
     * Résultat : [['vendor' => Vendor, 'productCount' => int], ...]
     */
    public function findAllWithProductCount(): array
    {
        return $this->createQueryBuilder('v')
            ->select('v', 'COUNT(p.idProduit) AS productCount')
            ->leftJoin('v.products', 'p')
            ->groupBy('v.id')
            ->orderBy('v.nom', 'ASC')
            ->getQuery()
            ->getResult();
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
    public function search(string $query): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.nom LIKE :q OR v.email LIKE :q')
            ->setParameter('q', '%' . $query . '%')
            ->orderBy('v.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Vendeurs actifs uniquement.
     */
    public function findActifs(): array
    {
        return $this->createQueryBuilder('v')
            ->where('v.statut = :statut')
            ->setParameter('statut', 'actif')
            ->orderBy('v.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
