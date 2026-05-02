<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function save(Product $product, bool $flush = false): void
    {
        $this->getEntityManager()->persist($product);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Product $product, bool $flush = false): void
    {
        $this->getEntityManager()->remove($product);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByCategorie(string $categorie): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.categorie = :categorie')
            ->setParameter('categorie', $categorie)
            ->orderBy('p.nomProduit', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function searchProducts(string $query): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.nomProduit LIKE :q OR p.description LIKE :q OR p.categorie LIKE :q')
            ->setParameter('q', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }

    public function findDistinctCategories(): array
    {
        return $this->createQueryBuilder('p')
            ->select('DISTINCT p.categorie')
            ->where('p.categorie IS NOT NULL')
            ->getQuery()
            ->getSingleColumnResult();
    }

    public function findAvailableProducts(): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.vendeur', 'v')  // ✅ JOIN ajouté
            ->addSelect('v')               // ✅ Charge vendor en même temps
            ->where('p.statut = :statut OR p.stockDisponible > 0')
            ->setParameter('statut', 'Disponible')
            ->orderBy('p.nomProduit', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function countAll(): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.idProduit)')
            ->getQuery()
            ->getSingleScalarResult();
    }



    public function findAllWithVendor(int $page = 1, int $pageSize = 50): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.vendeur', 'v')
            ->addSelect('v');

        $paginator = new Paginator($qb, fetchJoinCollection: true);
        $paginator->getQuery()
            ->setFirstResult(($page - 1) * $pageSize)
            ->setMaxResults($pageSize);

        return iterator_to_array($paginator);
    }

}