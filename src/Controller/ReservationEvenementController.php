<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\InscriptionEvenement;
use App\Form\InscriptionEvenementType;
use App\Repository\EvenementRepository;
use App\Repository\InscriptionEvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session as StripeSession;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use App\Service\QrCodeService;
use App\Service\MailerService;
use App\Entity\Notification;
use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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
            throw $this->createNotFoundException('Evenement introuvable.');
        }

        $reservation = new InscriptionEvenement();
        $reservation->setEvenement($evenement);
        $reservation->setStatut('pending');
        $reservation->setPaymentStatus('pending');
        $reservation->setDateReservation(new \DateTime());

        if ($this->getUser()) {
            $reservation->setUser($this->getUser());
            $reservation->setNom($this->getUser()->getFullName());
            $reservation->setEmail($this->getUser()->getEmail());
        }

        $form = $this->createForm(InscriptionEvenementType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $this->validateReservation($reservation, $evenement->getCapacity() ?? 0);

            if (empty($errors) && $form->isValid()) {
                $reservation->setMontantTotal($this->calculateReservationTotal($evenement, $reservation));
                $reservation->setDevise('tnd');
                $em->persist($reservation);
                $em->flush();

                try {
                    $session = $this->createStripeCheckoutSession($reservation);
                    $reservation->setStripeSessionId($session->id);
                    $em->flush();

                    return $this->redirect($session->url, 303);
                } catch (\Throwable $e) {
                    $em->remove($reservation);
                    $em->flush();
                    $this->addFlash('error', 'Impossible de lancer le paiement Stripe. Verifiez vos cles puis reessayez.');
                }
            }

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('reservation/reservation_new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/reservations/{id}/edit', name: 'reservation_edit')]
    public function edit(InscriptionEvenement $reservation, Request $request, EntityManagerInterface $em): Response
    {
        $this->denyReservationAccess($reservation);

        $evenement = $reservation->getEvenement();
        $form = $this->createForm(InscriptionEvenementType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $this->validateReservation($reservation, $evenement?->getCapacity() ?? 0);

            if (empty($errors) && $form->isValid()) {
                $reservation->setMontantTotal($this->calculateReservationTotal($evenement, $reservation));

                if ($reservation->getPaymentStatus() !== 'paid') {
                    $reservation->setPaymentStatus('pending');
                    $reservation->setStatut('pending');
                    $reservation->setStripeSessionId(null);
                    $reservation->setPaidAt(null);
                }

                $em->flush();
                $this->addFlash('success', 'Reservation mise a jour.');
                return $this->redirectToRoute('reservation_my');
            }

            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'evenement' => $evenement,
        ]);
    }

    #[Route('/reservations/{id}/pay', name: 'reservation_pay', methods: ['POST'])]
    public function pay(InscriptionEvenement $reservation, Request $request, EntityManagerInterface $em): Response
    {
        $this->denyReservationAccess($reservation);

        if (!$this->isCsrfTokenValid('pay' . $reservation->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de securite invalide.');
            return $this->redirectToRoute('reservation_my');
        }

        if ($reservation->getPaymentStatus() === 'paid') {
            $this->addFlash('success', 'Cette reservation est deja payee.');
            return $this->redirectToRoute('reservation_my');
        }

        $reservation->setMontantTotal($this->calculateReservationTotal($reservation->getEvenement(), $reservation));
        $reservation->setPaymentStatus('pending');
        $reservation->setStatut('pending');

        try {
            $session = $this->createStripeCheckoutSession($reservation);
            $reservation->setStripeSessionId($session->id);
            $em->flush();

            return $this->redirect($session->url, 303);
        } catch (\Throwable $e) {
            $this->addFlash('error', 'Impossible de relancer le paiement Stripe pour le moment.');
            return $this->redirectToRoute('reservation_my');
        }
    }

    #[Route('/reservations/payment/success', name: 'reservation_payment_success')]
    public function paymentSuccess(
        Request $request,
        InscriptionEvenementRepository $repo,
        EntityManagerInterface $em,
        QrCodeService $qrCodeService,
        MailerService $mailerService,
        NotificationService $notificationService 
    ): Response {
        $sessionId = (string) $request->query->get('session_id', '');
        if ($sessionId === '') {
            $this->addFlash('error', 'Session de paiement manquante.');
            return $this->redirectToRoute('reservation_my');
        }

        Stripe::setApiKey($this->getStripeSecretKey());

        try {
            $stripeSession = StripeSession::retrieve($sessionId);
        } catch (ApiErrorException $e) {
            $this->addFlash('error', 'Session Stripe introuvable.');
            return $this->redirectToRoute('reservation_my');
        }

        $reservation = $repo->findOneByStripeSessionId($sessionId);
        if (!$reservation) {
            $reservationId = $stripeSession->metadata->reservation_id ?? null;
            $reservation = $reservationId ? $repo->find((int) $reservationId) : null;
        }

        if (!$reservation) {
            $this->addFlash('error', 'Reservation associee introuvable.');
            return $this->redirectToRoute('reservation_my');
        }

        $qrPath = null;

        if ($stripeSession->payment_status === 'paid') {
            $reservation->setPaymentStatus('paid');
            $reservation->setStatut('confirme');
            $reservation->setPaidAt(new \DateTime());
            $reservation->setStripeSessionId($stripeSession->id);
            $em->flush();
             $user = $reservation->getUser();
    if ($user) {
        $notificationService->createNotification(
            $user,
            '🎟️ Paiement confirmé pour "' . ($reservation->getEvenement()?->getTitle() ?? 'événement') . '" — ' .
            $reservation->getNombrePlaces() . ' place(s) · ' .
            $reservation->getMontantTotal() . ' TND',
            'reservation'
        );
    }


            // Build reservation data
            $reservationData = [
                'id'       => (string) $reservation->getId(),
                'customer' => $reservation->getNom(),
                'email'    => $reservation->getEmail(),
                'event'    => $reservation->getEvenement()?->getTitle() ?? 'N/A',
                'seat'     => $reservation->getNombrePlaces() . ' place(s)',
                'amount'   => $reservation->getMontantTotal() . ' TND',
                'date'     => $reservation->getDateReservation()?->format('d/m/Y H:i') ?? date('d/m/Y H:i'),
            ];

            // Generate QR code
            try {
                $qrPath = $qrCodeService->generate($reservationData);
            } catch (\Throwable $e) {
                throw $e;
            }

            // Send email
            try {
                $mailerService->sendTicket($reservationData, $qrPath ?? '');
            } catch (\Throwable $e) {
                throw $e;
            }
        }

    return $this->render('reservation/payment_success.html.twig', [
        'reservation'    => $reservation,
        'payment_status' => $stripeSession->payment_status,
        'stripe_session' => $stripeSession->id,
        'amount'         => ($stripeSession->amount_total ?? 0) / 100,
        'customer_email' => $stripeSession->customer_details?->email ?? $reservation->getEmail(),
        'qr_path'        => $qrPath ? '/qrcodes/' . basename($qrPath) : null,
    ]);
}

    #[Route('/reservations/payment/cancel/{id}', name: 'reservation_payment_cancel')]
    public function paymentCancel(InscriptionEvenement $reservation): Response
    {
        $this->denyReservationAccess($reservation);

        $this->addFlash('error', 'Paiement annule. Votre reservation reste en attente.');
        return $this->redirectToRoute('reservation_my');
    }

    #[Route('/reservations/{id}/delete', name: 'reservation_delete', methods: ['POST'])]
    public function delete(InscriptionEvenement $reservation, Request $request, EntityManagerInterface $em): Response
    {
        $this->denyReservationAccess($reservation);

        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $em->remove($reservation);
            $em->flush();
            $this->addFlash('success', 'Reservation annulee.');
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
            $this->addFlash('success', 'Reservation supprimee.');
        }

        return $this->redirectToRoute('reservation_index');
    }

    private function validateReservation(InscriptionEvenement $reservation, int $capaciteMax): array
    {
        $errors = [];

        $nom = trim($reservation->getNom() ?? '');
        if ($nom === '') {
            $errors[] = 'Le nom est obligatoire.';
        } elseif (strlen($nom) < 2) {
            $errors[] = 'Le nom doit contenir au moins 2 caracteres.';
        } elseif (!preg_match("/^[a-zA-ZÀ-ÿ '\\-]+$/u", $nom)) {
            $errors[] = 'Le nom ne doit contenir que des lettres, espaces et tirets.';
        }

        $email = trim($reservation->getEmail() ?? '');
        if ($email === '') {
            $errors[] = "L'email est obligatoire.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Adresse email invalide.';
        }

        $tel = trim($reservation->getTelephone() ?? '');
        if ($tel === '') {
            $errors[] = 'Le telephone est obligatoire.';
        } elseif (!preg_match('/^[0-9+\s\-]{8,15}$/', $tel)) {
            $errors[] = 'Telephone invalide (8 a 15 chiffres).';
        }

        $places = $reservation->getNombrePlaces();
        if (empty($places) || $places <= 0) {
            $errors[] = 'Le nombre de places doit etre superieur a 0.';
        } elseif ($capaciteMax > 0 && $places > $capaciteMax) {
            $errors[] = 'Maximum ' . $capaciteMax . ' place(s) disponible(s).';
        }

        return $errors;
    }

    private function createStripeCheckoutSession(InscriptionEvenement $reservation): StripeSession
{
    $secretKey = $this->getStripeSecretKey();
    Stripe::setApiKey($secretKey);

    $evenement = $reservation->getEvenement();
    $currency = 'eur'; // ← only change: TND not supported by Stripe
    $amount = $reservation->getMontantTotal() ?? $this->calculateReservationTotal($evenement, $reservation);
    $amountCents = (int) round(((float) $amount) * 100);

    $successBase = $this->generateUrl('reservation_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL);
    $cancelUrl = $this->generateUrl('reservation_payment_cancel', ['id' => $reservation->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

    return StripeSession::create([
        'payment_method_types' => ['card'],
        'mode' => 'payment',
        'client_reference_id' => (string) $reservation->getId(),
        'customer_email' => $reservation->getEmail(),
        'metadata' => [
            'reservation_id' => (string) $reservation->getId(),
            'event_id'       => (string) $evenement?->getId(),
            'event_title'    => (string) $evenement?->getTitle(),
        ],
        'line_items' => [[
            'price_data' => [
                'currency' => $currency,
                'product_data' => [
                    'name' => 'Reservation evenement - ' . ($evenement?->getTitle() ?? 'BizCore'),
                ],
                'unit_amount' => $amountCents,
            ],
            'quantity' => 1,
        ]],
        'success_url' => $successBase . '?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url'  => $cancelUrl,
    ]);
}

    private function calculateReservationTotal(?Evenement $evenement, InscriptionEvenement $reservation): string
    {
        $price = (float) ($evenement?->getPrice() ?? 0);
        $places = (int) ($reservation->getNombrePlaces() ?? 1);

        return number_format($price * max(1, $places), 2, '.', '');
    }

    private function getStripeSecretKey(): string
    {
        $secretKey = $_ENV['STRIPE_SECRET_KEY'] ?? $_SERVER['STRIPE_SECRET_KEY'] ?? '';
        if ($secretKey === '') {
            throw new \RuntimeException('Missing STRIPE_SECRET_KEY.');
        }

        return $secretKey;
    }

    private function denyReservationAccess(InscriptionEvenement $reservation): void
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            return;
        }

        $owner = $reservation->getUser();
        $currentUser = $this->getUser();

        if ($owner !== null && $owner !== $currentUser) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas acceder a cette reservation.');
        }
    }
    // In any controller, e.g. TicketController.php
#[Route('/ticket', name: 'ticket_view')]
public function view(Request $request): Response
{
    return $this->render('ticket/view.html.twig', [
        'id'       => $request->query->get('id'),
        'customer' => $request->query->get('client'),
        'event'    => $request->query->get('event'),
        'seat'     => $request->query->get('seat'),
        'amount'   => $request->query->get('amount'),
        'date'     => $request->query->get('date'),
    ]);
}

}
