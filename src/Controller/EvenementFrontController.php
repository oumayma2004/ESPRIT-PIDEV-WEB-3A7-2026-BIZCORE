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
        $reservation->setStatut('confirmé');
        $reservation->setDateReservation(new \DateTime());
        $reservation->setEvenement($evenement); // needed for the Callback constraint

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // All constraints passed — save
            $evenement->setCapacity($evenement->getCapacity() - $reservation->getNombrePlaces());
            $em->persist($reservation);
            $em->flush();

            $this->addFlash('success', '✅ Votre réservation est confirmée !');

            return $this->redirectToRoute('evenement_show', ['id' => $id]);
        }

        // isSubmitted but NOT isValid → fall through and re-render
        // Symfony keeps errors attached to form fields automatically
        return $this->render('events/show.html.twig', [
        'evenement' => $evenement,
        'form'      => $form,
    ]);
    }
}