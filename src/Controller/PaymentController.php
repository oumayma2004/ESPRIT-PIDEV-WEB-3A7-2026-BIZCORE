<?php

namespace App\Controller;

use App\Service\TelegramNotificationService;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/payment', name: 'payment_')]
class PaymentController extends AbstractController
{
    public function __construct(
        private TelegramNotificationService $smsService,
    ) {}

    #[Route('', name: 'index')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $cart    = $session->get('cart', []);
        $total   = (float)$request->query->get('total', 0);

        if ($total <= 0 && !empty($cart)) {
            $total = array_sum(array_map(fn($i) => $i['prix'] * $i['quantity'], $cart));
        }

        if ($total <= 0) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('cart_index');
        }

        return $this->render('payment/index.html.twig', [
            'total'             => $total,
            'stripe_public_key' => $_ENV['STRIPE_PUBLIC_KEY'] ?? '',
        ]);
    }

    #[Route('/checkout', name: 'checkout', methods: ['POST'])]
    public function checkout(Request $request): Response
    {
        if (!$this->isCsrfTokenValid('payment', $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide.');
            return $this->redirectToRoute('payment_index');
        }

        $total = (float)$request->request->get('total', 0);

        if ($total <= 0) {
            $this->addFlash('error', 'Montant invalide.');
            return $this->redirectToRoute('payment_index');
        }

        $stripeSecret = $_ENV['STRIPE_SECRET_KEY'] ?? $_SERVER['STRIPE_SECRET_KEY'] ?? '';
        Stripe::setApiKey($stripeSecret);

        $successBase = $this->generateUrl('payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $successUrl  = $successBase . '?session_id={CHECKOUT_SESSION_ID}';
        $cancelUrl   = $this->generateUrl('payment_index', ['total' => $total], UrlGeneratorInterface::ABSOLUTE_URL);

        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency'     => 'eur',
                    'product_data' => ['name' => 'Commande BizCore Marketplace'],
                    'unit_amount'  => (int)round($total * 100),
                ],
                'quantity' => 1,
            ]],
            'mode'        => 'payment',
            'success_url' => $successUrl,
            'cancel_url'  => $cancelUrl,
        ]);

        $request->getSession()->set('stripe_total', $total);

        return $this->redirect($session->url, 303);
    }

    #[Route('/success', name: 'success')]
    public function success(Request $request): Response
    {
        $sessionId = $request->query->get('session_id');

        if (!$sessionId) {
            return $this->redirectToRoute('marketplace_index');
        }

        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY'] ?? $_SERVER['STRIPE_SECRET_KEY'] ?? '');

        try {
            $stripeSession = StripeSession::retrieve($sessionId);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Session de paiement introuvable.');
            return $this->redirectToRoute('marketplace_index');
        }

        $smsSent = false;
        $orderId = 'BZ-' . date('Ymd') . '-' . rand(1000, 9999);

        if ($stripeSession->payment_status === 'paid') {
            $cart = $request->getSession()->get('cart', []);
            $request->getSession()->set('cart', []);
            $request->getSession()->remove('stripe_total');

            $amount = number_format($stripeSession->amount_total / 100, 2, '.', ' ');
            
            $productNames = [];
            foreach ($cart as $item) {
                $qty = $item['quantity'] ?? 1;
                $nom = $item['nomProduit'] ?? 'Produit inconnu';
                $productNames[] = $qty > 1 ? "{$qty}x {$nom}" : $nom;
            }
            $productList = !empty($productNames) ? implode(', ', $productNames) : 'Articles Marketplace';

            $smsBody = sprintf(
                "✅ Bonjour ! Votre paiement a été validé avec succès sur BizCore.\n" .
                "Commande : #%s\n" .
                "Produit(s) : %s\n" .
                "Total réglé : %s EUR\n" .
                "Merci pour votre confiance et à très bientôt ! 🌟",
                $orderId,
                $productList,
                $amount
            );

            $smsSent = $this->smsService->send($smsBody);
        }

        return $this->render('payment/success.html.twig', [
            'amount'         => $stripeSession->amount_total / 100,
            'order_id'       => $orderId,
            'payment_status' => $stripeSession->payment_status,
            'customer_email' => $stripeSession->customer_details?->email ?? null,
            'stripe_session' => $stripeSession->id,
            'sms_sent'       => $smsSent,
        ]);
    }
}
