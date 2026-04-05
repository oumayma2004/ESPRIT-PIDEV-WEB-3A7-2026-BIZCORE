<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\EvenementRepository;
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

        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);

        // Initialisation automatique
        $reservation->setStatut('confirmé');
        $reservation->setDateReservation(new \DateTime());

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            $errors = [];

            // Nom obligatoire et lettres/espaces seulement
            if (empty($data->getNom()) || !preg_match("/^[a-zA-ZÀ-ÿ '-]+$/", $data->getNom())) {
                $errors[] = "Nom invalide (obligatoire, lettres uniquement).";
            }

            // Email obligatoire et format valide
            if (empty($data->getEmail()) || !filter_var($data->getEmail(), FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email invalide.";
            }

            // Téléphone obligatoire
            if (empty($data->getTelephone())) {
                $errors[] = "Téléphone obligatoire.";
            }

            // Nombre de places >0 et ≤ capacité
            $nombre_places = $data->getNombrePlaces();
            $capacity = $evenement->getCapacity();
            if ($nombre_places <= 0) {
                $errors[] = "Le nombre de places doit être supérieur à 0.";
            } elseif ($nombre_places > $capacity) {
                $errors[] = "Le nombre de places ne peut pas dépasser la capacité de l'événement ($capacity).";
            }

            if (empty($errors)) {
                // Tout est valide → enregistrer la réservation
                $data->setEvenement($evenement);
                $em->persist($data);
                $em->flush();

                $this->addFlash('success', '✅ Votre réservation est confirmée !');

                // Redirection pour éviter la soumission multiple
                return $this->redirectToRoute('evenement_show', ['id' => $id]);
            } else {
                // Afficher toutes les erreurs
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }
            }
        }

        return $this->render('events/show.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }
}