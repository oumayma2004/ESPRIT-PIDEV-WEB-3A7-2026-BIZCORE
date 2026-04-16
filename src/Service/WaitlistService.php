<?php

namespace App\Service;

use App\Entity\Evenement;
use App\Entity\InscriptionEvenement;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class WaitlistService
{
    public function __construct(private EntityManagerInterface $em) {}

    public function isComplet(Evenement $ev): bool
    {
        $count = $this->em->createQuery(
            'SELECT COUNT(i.id) 
             FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'confirmed')
        ->getSingleScalarResult();

        return $count >= $ev->getCapacity();
    }

    public function addToWaitlist(Evenement $ev, User $user, int $places = 1): InscriptionEvenement
    {
        $inscription = new InscriptionEvenement();
        $inscription->setEvenement($ev);
        $inscription->setUser($user);
        $inscription->setNom($user->getFullName());
        $inscription->setEmail($user->getEmail());
        $inscription->setNombrePlaces($places);
        $inscription->setStatut('waitlist');
        $inscription->setDateReservation(new \DateTime());

        $this->em->persist($inscription);
        $this->em->flush();

        return $inscription;
    }

    public function getWaitlistPosition(Evenement $ev, User $user): int
    {
        $qb = $this->em->createQuery(
            'SELECT i 
             FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status
             ORDER BY i.dateReservation ASC'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'waitlist')
        ->getResult();

        foreach ($qb as $index => $item) {
            if ($item->getUser()->getId() === $user->getId()) {
                return $index + 1;
            }
        }

        return -1;
    }

    public function getPlacesDisponibles(Evenement $ev): int
    {
        $count = $this->em->createQuery(
            'SELECT SUM(i.nombrePlaces)
             FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'confirmed')
        ->getSingleScalarResult();

        return max(0, $ev->getCapacity() - (int)$count);
    }
}