<?php

namespace App\Controller;

use App\Entity\InscriptionEvenement;
use App\Form\InscriptionEvenementType;
use App\Repository\EvenementRepository;
use App\Repository\InscriptionEvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationEvenementController extends AbstractController
{
    #[Route('/reservations/mes-reservations', name: 'reservation_my')]
    public function my(InscriptionEvenementRepository $repo): Response
    {
        $user = $this->getUser();
        $reservations = $user
            ? $repo->findBy(['user' => $user], ['dateReservation' => 'DESC'])
            : [];

        return $this->render('reservation/my.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/reservations', name: 'reservation_index')]
    public function index(InscriptionEvenementRepository $repo): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('reservation/reservation_index.html.twig', [
            'reservations' => $repo->findAll(),
        ]);
    }

    #[Route('/reservations/new/{id}', name: 'reservation_new')]
    public function new(int $id, EvenementRepository $evenementRepo, Request $request, EntityManagerInterface $em): Response
    {
        $evenement = $evenementRepo->find($id);
        if (!$evenement) {
            throw $this->createNotFoundException('Événement introuvable.');
        }

        $reservation = new InscriptionEvenement();
        $reservation->setEvenement($evenement);
        $reservation->setStatut('confirmé');
        $reservation->setDateReservation(new \DateTime());

        if ($this->getUser()) {
            $reservation->setUser($this->getUser());
            $reservation->setNom($this->getUser()->getFullName());
            $reservation->setEmail($this->getUser()->getEmail());
        }

        $form = $this->createForm(InscriptionEvenementType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $this->validateReservation($reservation, $evenement->getCapacity());

            if (empty($errors) && $form->isValid()) {
                $em->persist($reservation);
                $em->flush();
                $this->addFlash('success', '✅ Votre réservation est confirmée !');
                return $this->redirectToRoute('reservation_my');
            }

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('reservation/reservation_new.html.twig', [
            'evenement' => $evenement,
            'form'      => $form,
        ]);
    }

    #[Route('/reservations/{id}/edit', name: 'reservation_edit')]
    public function edit(InscriptionEvenement $reservation, Request $request, EntityManagerInterface $em): Response
    {
        $evenement = $reservation->getEvenement();
        $form = $this->createForm(InscriptionEvenementType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $this->validateReservation($reservation, $evenement->getCapacity());

            if (empty($errors) && $form->isValid()) {
                $em->flush();
                $this->addFlash('success', '✅ Réservation modifiée avec succès.');
                return $this->redirectToRoute('reservation_my');
            }

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form'        => $form,
            'evenement'   => $evenement,
        ]);
    }

    #[Route('/reservations/{id}/delete', name: 'reservation_delete', methods: ['POST'])]
    public function delete(InscriptionEvenement $reservation, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation annulée.');
        }

        return $this->redirectToRoute('reservation_my');
    }

    #[Route('/reservations/{id}/admin-delete', name: 'reservation_admin_delete', methods: ['POST'])]
    public function adminDelete(InscriptionEvenement $reservation, Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Réservation supprimée.');
        }

        return $this->redirectToRoute('reservation_index');
    }

    // ── Shared PHP validation logic ──────────────────────────────
    private function validateReservation(InscriptionEvenement $reservation, int $capaciteMax): array
    {
        $errors = [];

        // Nom
        $nom = trim($reservation->getNom() ?? '');
        if (empty($nom)) {
            $errors[] = 'Le nom est obligatoire.';
        } elseif (strlen($nom) < 2) {
            $errors[] = 'Le nom doit contenir au moins 2 caractères.';
        } elseif (!preg_match("/^[a-zA-ZÀ-ÿ '\-]+$/u", $nom)) {
            $errors[] = 'Le nom ne doit contenir que des lettres, espaces et tirets.';
        }

        // Email
        $email = trim($reservation->getEmail() ?? '');
        if (empty($email)) {
            $errors[] = 'L\'email est obligatoire.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Adresse email invalide.';
        }

        // Téléphone
        $tel = trim($reservation->getTelephone() ?? '');
        if (empty($tel)) {
            $errors[] = 'Le téléphone est obligatoire.';
        } elseif (!preg_match('/^[0-9+\s\-]{8,15}$/', $tel)) {
            $errors[] = 'Téléphone invalide (8 à 15 chiffres).';
        }

        // Nombre de places
        $places = $reservation->getNombrePlaces();
        if (empty($places) || $places <= 0) {
            $errors[] = 'Le nombre de places doit être supérieur à 0.';
        } elseif ($places > $capaciteMax) {
            $errors[] = 'Maximum ' . $capaciteMax . ' place(s) disponible(s).';
        }

        return $errors;
    }
}