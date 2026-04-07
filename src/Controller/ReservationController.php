<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    // ── Front: Mes réservations ──────────────────────────────────────
    #[Route('/mes-reservations', name: 'reservation_my')]
    public function my(ReservationRepository $repo): Response
    {
        // For now returns all; replace with ->findBy(['user' => $this->getUser()])
        // once authentication is set up
        $reservations = $repo->findAll();

        return $this->render('reservation/my.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    // ── Front: Edit ──────────────────────────────────────────────────
    #[Route('/reservation/{id}/edit', name: 'reservation_edit', methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        ReservationRepository $repo,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $reservation = $repo->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation introuvable.');
        }

        $evenement = $reservation->getEvenement();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $em->flush();
    $this->addFlash('success', '✅ Réservation #' . $reservation->getId() . ' modifiée avec succès !');
    return $this->redirectToRoute('reservation_my');
}

        return $this->render('reservation/edit.html.twig', [
            'form'        => $form->createView(),
            'reservation' => $reservation,
            'evenement'   => $evenement,
        ]);
    }
    // ── Front: Delete ────────────────────────────────────────────────
    #[Route('/reservation/{id}/delete', name: 'reservation_delete', methods: ['POST'])]
    public function delete(
        int $id,
        ReservationRepository $repo,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        $reservation = $repo->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException();
        }

        if ($this->isCsrfTokenValid('delete' . $id, $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation annulée.');
        }

        return $this->redirectToRoute('reservation_my');
    }

    // ── Admin: list ──────────────────────────────────────────────────
    #[Route('/admin/reservations', name: 'reservation_index')]
    public function index(ReservationRepository $repo): Response
    {
        return $this->render('reservation/admin_index.html.twig', [
            'reservations' => $repo->findAll(),
        ]);
    }

    // ── Admin: delete ────────────────────────────────────────────────
    #[Route('/reservation/{id}/admin-delete', name: 'reservation_admin_delete', methods: ['POST'])]
    public function adminDelete(
        int $id,
        ReservationRepository $repo,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        $reservation = $repo->find($id);
        if ($reservation && $this->isCsrfTokenValid('delete' . $id, $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        }

        return $this->redirectToRoute('reservation_index');
    }
}