<?php
// src/Controller/StripeWebhookController.php

namespace App\Controller;

use App\Service\QrCodeService;
use App\Service\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StripeWebhookController extends AbstractController
{
    #[Route('/webhook/stripe', name: 'stripe_webhook', methods: ['POST'])]
    public function handle(
        Request $request,
        QrCodeService $qrCodeService,
        MailerService $mailerService
    ): Response {
        $payload = $request->getContent();
        $sigHeader = $request->headers->get('Stripe-Signature');
        $secret = $_ENV['STRIPE_WEBHOOK_SECRET'];

        try {
            $event = \Stripe\Webhook::constructEvent($payload, $sigHeader, $secret);
        } catch (\Exception $e) {
            return new Response('Invalid signature', 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            // Extract reservation info from metadata
            $reservationData = [
                'id'        => $session->id,
                'customer'  => $session->customer_details->name,
                'email'     => $session->customer_details->email,
                'amount'    => $session->amount_total / 100 . ' ' . strtoupper($session->currency),
                'date'      => date('d/m/Y H:i'),
                // Add your custom metadata fields:
                'event'     => $session->metadata->event ?? 'N/A',
                'seat'      => $session->metadata->seat ?? 'N/A',
            ];

            // Generate QR code
            $qrPath = $qrCodeService->generate($reservationData);

            // Send email with QR code
            $mailerService->sendTicket($reservationData, $qrPath);
        }

        return new Response('OK', 200);
    }
}