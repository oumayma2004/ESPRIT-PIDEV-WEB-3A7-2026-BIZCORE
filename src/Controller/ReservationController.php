<?php

namespace App\Controller;

use App\Entity\Evenement;
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
    // ── New reservation (from show page) ──────────────────────────
    #[Route('/reservation/new/{id}', name: 'reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, Evenement $evenement, EntityManagerInterface $em): Response
    {
        $reservation = new Reservation();
        $reservation->setEvenement($evenement);
        $reservation->setStatut('confirmé');

        $form = $this->createForm(ReservationType::class, $reservation, [
            'is_edit' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reservation);
            $em->flush();

            $this->addFlash('success', 'Réservation confirmée !');
            return $this->redirectToRoute('evenement_show', ['id' => $evenement->getId()]);
        }

        return $this->render('reservation/form.html.twig', [
            'evenement'   => $evenement,
            'reservation' => $reservation,
            'form'        => $form->createView(),
        ]);
    }

    // ── Edit reservation ──────────────────────────────────────────
    #[Route('/reservation/edit/{id}', name: 'reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation, [
            'is_edit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réservation modifiée.');
            return $this->redirectToRoute('reservation_my');
        }

        return $this->render('reservation/form.html.twig', [
            'evenement'   => $reservation->getEvenement(),
            'reservation' => $reservation,
            'form'        => $form->createView(),
        ]);
    }

    // ── My reservations (front) ───────────────────────────────────
    #[Route('/reservation/my', name: 'reservation_my', methods: ['GET'])]
    public function my(ReservationRepository $repo): Response
    {
        return $this->render('reservation/my.html.twig', [
            'reservations' => $repo->findAll(),
        ]);
    }

    // ── Admin list ────────────────────────────────────────────────
    #[Route('/reservation/admin', name: 'reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $repo): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $repo->findAll(),
        ]);
    }

    // ── Delete (front) ────────────────────────────────────────────
    #[Route('/reservation/{id}/delete', name: 'reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation annulée.');
        }

        return $this->redirectToRoute('reservation_my');
    }

    // ── Delete (admin) ────────────────────────────────────────────
    #[Route('/reservation/{id}/admin-delete', name: 'reservation_admin_delete', methods: ['POST'])]
    public function adminDelete(Request $request, Reservation $reservation, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        }

        return $this->redirectToRoute('reservation_index');
    }
}