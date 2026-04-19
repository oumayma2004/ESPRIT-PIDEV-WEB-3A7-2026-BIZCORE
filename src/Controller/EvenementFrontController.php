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

class EvenementFrontController extends AbstractController
{
    #[Route('/events', name: 'evenement_front')]
    public function index(EvenementRepository $repo): Response
    {
        return $this->render('events/front_index.html.twig', [
            'evenements' => $repo->findAll(),
        ]);
    }

    #[Route('/events/{id}', name: 'evenement_show')]
    public function show(
        int $id,
        EvenementRepository $repo,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $evenement = $repo->find($id);

        if (!$evenement) {
            throw $this->createNotFoundException('Événement introuvable.');
        }

        $reservation = new InscriptionEvenement();
        $reservation->setStatut('confirmé');
        $reservation->setDateReservation(new \DateTime());
        $reservation->setEvenement($evenement);

        if ($this->getUser()) {
            $reservation->setUser($this->getUser());
            $reservation->setNom($this->getUser()->getFullName());
            $reservation->setEmail($this->getUser()->getEmail());
        }

        $form = $this->createForm(InscriptionEvenementType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = [];

            // Nom
            $nom = trim($reservation->getNom() ?? '');
            if (empty($nom)) {
                $errors[] = 'Le nom est obligatoire.';
            } elseif (!preg_match("/^[a-zA-ZÀ-ÿ '\-]+$/u", $nom)) {
                $errors[] = 'Le nom ne doit contenir que des lettres, espaces et tirets.';
            } elseif (strlen($nom) < 2) {
                $errors[] = 'Le nom doit contenir au moins 2 caractères.';
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
            } elseif ($places > $evenement->getCapacity()) {
    $errors[] = 'Maximum ' . $evenement->getCapacity() . ' place(s) disponible(s).';
}

            if (empty($errors) && $form->isValid()) {
                $em->persist($reservation);
                $em->flush();

                $this->addFlash('success', '✅ Votre réservation est confirmée !');
                return $this->redirectToRoute('evenement_show', ['id' => $id]);
            }

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('events/show.html.twig', [
            'evenement' => $evenement,
            'form'      => $form,
        ]);
    }

    #[Route('/events/{id}/edit', name: 'reservation_edit', methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        InscriptionEvenementRepository $reservationRepo
    ): Response {
        $reservation = $reservationRepo->find($id);

        if (!$reservation) {
            throw $this->createNotFoundException('Réservation introuvable.');
        }

        $evenement = $reservation->getEvenement();
        $form = $this->createForm(InscriptionEvenementType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = [];

            // Nom
            $nom = trim($reservation->getNom() ?? '');
            if (empty($nom)) {
                $errors[] = 'Le nom est obligatoire.';
            } elseif (!preg_match("/^[a-zA-ZÀ-ÿ '\-]+$/u", $nom)) {
                $errors[] = 'Le nom ne doit contenir que des lettres, espaces et tirets.';
            } elseif (strlen($nom) < 2) {
                $errors[] = 'Le nom doit contenir au moins 2 caractères.';
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
            } elseif ($places > $evenement->getCapacity()) {
    $errors[] = 'Maximum ' . $evenement->getCapacity() . ' place(s) disponible(s).';
}

            if (empty($errors) && $form->isValid()) {
                $em->flush();
                $this->addFlash('success', '✅ Réservation modifiée avec succès.');
                return $this->redirectToRoute('reservation_my');
            }

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('evenement/edit_reservation.html.twig', [
            'form'        => $form,
            'reservation' => $reservation,
            'evenement'   => $evenement,
        ]);
    }

    #[Route('/mes-reservations', name: 'reservation_my')]
    public function myReservations(InscriptionEvenementRepository $reservationRepo): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $reservations = $reservationRepo->findBy(['user' => $user]);

        return $this->render('events/my_reservations.html.twig', [
            'reservations' => $reservations,
        ]);
    }
}