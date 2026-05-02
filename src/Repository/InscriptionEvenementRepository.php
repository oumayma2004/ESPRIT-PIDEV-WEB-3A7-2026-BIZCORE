<?php

namespace App\Repository;

use App\Entity\InscriptionEvenement;
use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class InscriptionEvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscriptionEvenement::class);
    }

   public function countTotalPlacesByEvent(Evenement $event): int
{
    return (int) $this->createQueryBuilder('i')
        ->select('COALESCE(SUM(i.nombrePlaces), 0)')
        ->where('i.evenement = :event')
        ->andWhere('i.statut = :statut')
        ->setParameter('event', $event)
        ->setParameter('statut', 'confirme')
        ->getQuery()
        ->getSingleScalarResult();
}
}
