<?php

namespace App\Controller;

use App\Entity\InscriptionEvenement;
use App\Repository\EvenementRepository;
use App\Repository\InscriptionEvenementRepository;
use App\Service\WaitlistService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Waitlistcontroller extends AbstractController
{
    // ── User joins waitlist from event page ──────────────────────────────
    #[Route('/events/{id}/waitlist/join', name: 'waitlist_join', methods: ['POST'])]
    public function join(
        int $id,
        Request $request,
        EvenementRepository $repo,
        WaitlistService $waitlist,
        InscriptionEvenementRepository $inscriptionRepo
    ): Response {
        $evenement = $repo->find($id);
        if (!$evenement) throw $this->createNotFoundException();

        $user = $this->getUser();

        // Check if already on waitlist
        if ($user) {
            $existing = $inscriptionRepo->findOneBy([
                'evenement' => $evenement,
                'user'      => $user,
                'statut'    => 'waitlist',
            ]);
            if ($existing) {
                $this->addFlash('error', '⚠️ Vous êtes déjà sur la liste d\'attente.');
                return $this->redirectToRoute('evenement_show', ['id' => $id]);
            }
        }

        $nom    = $request->request->get('nom', $user?->getFullName() ?? '');
        $email  = $request->request->get('email', $user?->getEmail() ?? '');
        $tel    = $request->request->get('telephone', '');
        $places = max(1, (int) $request->request->get('nombrePlaces', 1));

        $inscription = $waitlist->addToWaitlist($evenement, $user, $places, $nom, $email, $tel);
        $position    = $waitlist->getWaitlistPosition($evenement, $inscription);

        $this->addFlash('success', "⏳ Vous êtes #$position sur la liste d'attente. Vous serez notifié(e) par email si une place se libère.");

        return $this->redirectToRoute('evenement_show', ['id' => $id]);
    }

    // ── User cancels their confirmed reservation → auto-promote ──────────
    #[Route('/reservations/{id}/cancel', name: 'reservation_cancel', methods: ['POST'])]
    public function cancel(
        int $id,
        InscriptionEvenementRepository $inscriptionRepo,
        WaitlistService $waitlist,
        EntityManagerInterface $em
    ): Response {
        $inscription = $inscriptionRepo->find($id);

        if (!$inscription) throw $this->createNotFoundException();

        // Security: only the owner can cancel
        if ($inscription->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $evenement = $inscription->getEvenement();

        // Cancel the reservation
        $inscription->setStatut('annule');
        $em->flush();

        // Auto-promote next person on waitlist
        $promoted = $waitlist->promoteFromWaitlist($evenement);

        if ($promoted) {
            $this->addFlash('success', '✅ Réservation annulée. La place a été attribuée automatiquement au suivant sur la liste d\'attente.');
        } else {
            $this->addFlash('success', '✅ Réservation annulée avec succès.');
        }

        return $this->redirectToRoute('reservation_my');
    }

    // ── Admin: view waitlist for an event ────────────────────────────────
    #[Route('/evenement/{id}/waitlist', name: 'admin_waitlist', methods: ['GET'])]
    public function adminWaitlist(
        int $id,
        EvenementRepository $repo,
        WaitlistService $waitlist
    ): Response {
        // ✅ No role restriction - accessible to all logged-in users
        $evenement = $repo->find($id);
        if (!$evenement) throw $this->createNotFoundException();

        return $this->render('evenement/waitlist.html.twig', [
            'evenement'         => $evenement,
            'waitlist'          => $waitlist->getWaitlist($evenement),
            'placesDisponibles' => $waitlist->getPlacesDisponibles($evenement),
        ]);
    }

    // ── Admin: manually promote someone from waitlist ────────────────────
    #[Route('/evenement/{id}/waitlist/promote', name: 'admin_waitlist_promote', methods: ['POST'])]
    public function promote(
        int $id,
        EvenementRepository $repo,
        WaitlistService $waitlist
    ): Response {
        // ✅ No role restriction
        $evenement = $repo->find($id);
        if (!$evenement) throw $this->createNotFoundException();

        $promoted = $waitlist->promoteFromWaitlist($evenement);

        if ($promoted) {
            $this->addFlash('success', "✅ {$promoted->getNom()} a été promu(e) depuis la liste d'attente et notifié(e) par email.");
        } else {
            $this->addFlash('error', '⚠️ Aucune promotion possible (liste vide ou places insuffisantes).');
        }

        return $this->redirectToRoute('admin_waitlist', ['id' => $id]);
    }

    // ── Admin: remove someone from waitlist ──────────────────────────────
    #[Route('/waitlist/{id}/remove', name: 'admin_waitlist_remove', methods: ['POST'])]
    public function remove(
        int $id,
        InscriptionEvenementRepository $inscriptionRepo,
        EntityManagerInterface $em
    ): Response {
        // ✅ No role restriction
        $inscription = $inscriptionRepo->find($id);
        if (!$inscription) throw $this->createNotFoundException();

        $eventId = $inscription->getEvenement()->getId();
        $em->remove($inscription);
        $em->flush();

        $this->addFlash('success', '🗑 Entrée supprimée de la liste d\'attente.');
        return $this->redirectToRoute('admin_waitlist', ['id' => $eventId]);
    }
}