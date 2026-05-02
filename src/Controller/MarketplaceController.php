<?php

namespace App\Controller;

use App\Entity\Vendor;
use App\Entity\Product;
use App\Form\SellProductType;
use App\Repository\VendorRepository;
use App\Service\FlashPromotionService;
use App\Service\ProductService;
use App\Service\TelegramNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marketplace', name: 'marketplace_')]
class MarketplaceController extends AbstractController
{
    public function __construct(
        private ProductService $productService,
        private RequestStack $requestStack,
        private TelegramNotificationService $smsService,
    ) {
    }

    #[Route('/sell', name: 'sell', methods: ['GET', 'POST'])]
    public function sellProduct(Request $request, EntityManagerInterface $em, VendorRepository $vendorRepo, \Symfony\Component\String\Slugger\SluggerInterface $slugger): Response
    {
        // On récupère l'utilisateur connecté via Security
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour vendre un produit.');
            return $this->redirectToRoute('app_login'); // Assurez-vous que cette route existe ou redirigez ailleurs
        }

        $product = new Product();
        $form = $this->createForm(SellProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->getClientOriginalExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/products',
                        $newFilename
                    );
                    $product->setImageUrl('/uploads/products/' . $newFilename);
                } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image.');
                }
            }

            $selectedVendorName = $form->get('vendorName')->getData();
            $customPhone = $form->get('telephone')->getData();
            $customRating = $form->get('rating')->getData();

            // Vérifier si un vendeur existe déjà avec cet email
            $vendor = $vendorRepo->findOneBy(['email' => $user->getEmail()]);

            // Si le vendeur n'existe pas, on le crée automatiquement
            if (!$vendor) {
                $vendor = new Vendor();
                $vendor->setEmail($user->getEmail());
                if (method_exists($user, 'getTelephone')) {
                    $vendor->setTelephone($user->getTelephone());
                }
                $vendor->setStatut('actif');
                $em->persist($vendor);
            }
            // On met à jour le nom et téléphone du vendeur
            $vendor->setNom($selectedVendorName);
            if ($customPhone) {
                $vendor->setTelephone($customPhone);
            }

            // Associer le produit au vendeur et définir le rating
            $product->setVendeur($vendor);
            $product->setRating((float) $customRating);

            // Optionnel : donner un score initial d'avis pour que l'affichage soit complet 
            if ($customRating > 0 && $product->getRatingCount() == 0) {
                $product->setRatingCount(1);
            }

            try {
                $em->persist($product);
                $em->flush();
                $this->addFlash('success', 'Votre annonce a été publiée avec succès dans la Marketplace !');
                return $this->redirectToRoute('marketplace_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur de base de données : ' . $e->getMessage());
            }
        }

        return $this->render('marketplace/sell.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/product/{id}/edit', name: 'edit_product', methods: ['GET', 'POST'])]
    public function editProduct(int $id, Request $request, EntityManagerInterface $em, \App\Repository\ProductRepository $productRepo, \Symfony\Component\String\Slugger\SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('app_login');
        }

        $product = $productRepo->find($id);
        if (!$product) {
            $this->addFlash('error', 'Produit introuvable.');
            return $this->redirectToRoute('marketplace_index');
        }

        // Vérification très basique du propriétaire (via l'email du vendeur)
        if ($product->getVendeur() && $product->getVendeur()->getEmail() !== $user->getEmail()) {
            if (!$this->isGranted('ROLE_ADMIN')) {
                $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier ce produit.');
                return $this->redirectToRoute('marketplace_index');
            }
        }

        $form = $this->createForm(SellProductType::class, $product);
        // Pré-remplir les champs virtuels
        $form->get('vendorName')->setData($product->getVendeur() ? $product->getVendeur()->getNom() : '');
        $form->get('telephone')->setData($product->getVendeur() ? $product->getVendeur()->getTelephone() : '');
        $form->get('rating')->setData($product->getRating());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $slugger->slug($originalFilename) . '-' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
                try {
                    $imageFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/products', $newFilename);
                    $product->setImageUrl('/uploads/products/' . $newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur image.');
                }
            }

            if ($product->getVendeur()) {
                $product->getVendeur()->setNom($form->get('vendorName')->getData());
                $newPhone = $form->get('telephone')->getData();
                if ($newPhone) {
                    $product->getVendeur()->setTelephone($newPhone);
                }
            }
            $product->setRating((float) $form->get('rating')->getData());

            $em->persist($product);
            $em->flush();

            $this->addFlash('success', 'Annonce modifiée avec succès.');
            return $this->redirectToRoute('marketplace_index');
        }

        return $this->render('marketplace/sell.html.twig', [
            'form' => $form->createView(),
            'editMode' => true
        ]);
    }

    #[Route('/product/{id}/delete', name: 'delete_product', methods: ['POST'])]
    public function deleteProduct(int $id, Request $request, EntityManagerInterface $em, \App\Repository\ProductRepository $productRepo): Response
    {
        $user = $this->getUser();
        $product = $productRepo->find($id);

        if (!$product || !$user) {
            return $this->redirectToRoute('marketplace_index');
        }

        if ($product->getVendeur() && $product->getVendeur()->getEmail() !== $user->getEmail() && !$this->isGranted('ROLE_ADMIN')) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('marketplace_index');
        }

        if ($this->isCsrfTokenValid('delete_product_' . $id, $request->request->get('_token'))) {
            $em->remove($product);
            $em->flush();
            $this->addFlash('success', 'L\'annonce a été supprimée.');
        }

        return $this->redirectToRoute('marketplace_index');
    }

    #[Route('', name: 'index')]
    public function index(): Response
    {
        $products = $this->productService->getAllProducts();
        $categories = $this->productService->getCategories();

        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $favorites = $session->get('favorites', []);

        return $this->render('marketplace/index.html.twig', [
            'products' => $products,
            'categories' => $categories,
            'cart_count' => $cartCount,
            'favorites' => $favorites,
        ]);
    }

    #[Route('/product/{id}/rate', name: 'rate_product', methods: ['POST'])]
    public function rateProduct(int $id, Request $request, \App\Repository\ProductRepository $productRepo, EntityManagerInterface $em): Response
    {
        $product = $productRepo->find($id);
        if (!$product) {
            $this->addFlash('error', 'Produit introuvable.');
            return $this->redirectToRoute('marketplace_index');
        }

        $token = $request->request->get('_token');
        if ($this->isCsrfTokenValid('rate_product_' . $id, $token)) {
            $rating = (float) $request->request->get('rating', 0);
            if ($rating >= 1 && $rating <= 5) {
                $product->addRating($rating);
                $em->flush();
                $this->addFlash('success', 'Merci pour votre évaluation du produit ' . $product->getNomProduit() . ' !');
            } else {
                $this->addFlash('error', 'Note invalide.');
            }
        }

        return $this->redirectToRoute('marketplace_index');
    }

    #[Route('/api/shops/ranking', name: 'api_shops_ranking', methods: ['GET'])]
    public function getShopsRanking(VendorRepository $vendorRepo): JsonResponse
    {
        $vendors = $vendorRepo->findBy([], null, 100, 0);

        $vendorData = [];
        foreach ($vendors as $v) {
            $productRatingsSum = 0;
            $productRatingCount = 0;

            // Calculate aggregate rating from products
            foreach ($v->getProducts() as $p) {
                $c = $p->getRatingCount() ?? 0;
                $productRatingsSum += ($p->getRating() ?? 0) * $c;
                $productRatingCount += $c;
            }

            if ($productRatingCount > 0) {
                $rating = $productRatingsSum / $productRatingCount;
                $ratingCount = $productRatingCount;
            } else {
                // Fallback to direct vendor rating
                $rating = $v->getRating() ?? 0;
                $ratingCount = $v->getRatingCount() ?? 0;
            }

            $vendorData[] = [
                'vendor' => $v,
                'rating' => $rating,
                'ratingCount' => $ratingCount,
            ];
        }

        // Sort from best to worst
        usort($vendorData, function ($a, $b) {
            return $b['rating'] <=> $a['rating'];
        });

        $data = [];
        foreach ($vendorData as $item) {
            $v = $item['vendor'];
            $rating = $item['rating'];

            // "AI" generated insight based on stats
            if ($rating >= 4.5) {
                $aiReview = "Performance d’excellence. Indicateurs de fiabilité maximisés avec un historique constant de satisfaction élevée.";
            } elseif ($rating >= 3.0) {
                $aiReview = "Performance standard. Les métriques générales sont conformes aux attentes du marché avec une fiabilité stable.";
            } elseif ($rating > 0) {
                $aiReview = "Performance nécessitant une attention. Variations temporelles détectées dans l'historique des évaluations.";
            } else {
                $aiReview = "Entité émergente. Données analytiques insuffisantes pour générer une modélisation de fiabilité prédictive.";
            }

            $metrics = [
                'reliability' => $rating > 0 ? min(100, round(($rating / 5) * 100)) : 50,
                'delivery' => $rating >= 4 ? 98 : ($rating >= 3 ? 90 : 75)
            ];

            $data[] = [
                'id' => $v->getId(),
                'nom' => $v->getNom(),
                'rating' => round($rating, 1),
                'ratingCount' => $item['ratingCount'],
                'statut' => $v->getStatut(),
                'ai_insight' => $aiReview,
                'metrics' => $metrics
            ];
        }

        return new JsonResponse(['success' => true, 'shops' => $data]);
    }

    #[Route('/api/shops/{id}/rate', name: 'api_rate_shop', methods: ['POST'])]
    public function apiRateShop(int $id, Request $request, VendorRepository $vendorRepo, EntityManagerInterface $em): JsonResponse
    {
        $vendor = $vendorRepo->find($id);
        if (!$vendor) {
            return new JsonResponse(['success' => false, 'message' => 'Vendeur introuvable'], 404);
        }

        $data = json_decode($request->getContent(), true);
        $score = isset($data['rating']) ? (float) $data['rating'] : 0;

        if ($score >= 1 && $score <= 5) {
            $vendor->addRating($score);
            $em->flush();
            return new JsonResponse([
                'success' => true,
                'newRating' => round($vendor->getRating(), 1),
                'newCount' => $vendor->getRatingCount()
            ]);
        }

        return new JsonResponse(['success' => false, 'message' => 'Note invalide'], 400);
    }

    /**
     * API — Envoie un SMS personnalisé au numéro configuré (+21696694983)
     *
     * POST /marketplace/api/sms/send
     * Body JSON : { "message": "Votre texte ici" }
     */
    #[Route('/api/sms/send', name: 'api_sms_send', methods: ['POST'])]
    public function apiSmsSend(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = trim($data['message'] ?? '');

        if ($message === '') {
            return new JsonResponse([
                'success' => false,
                'message' => 'Le champ "message" est obligatoire.'
            ], 400);
        }

        if (mb_strlen($message) > 1600) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Le message ne doit pas dépasser 1600 caractères.'
            ], 400);
        }

        $sent = $this->smsService->send($message);

        return new JsonResponse([
            'success' => $sent,
            'to' => '+21696694983',
            'message' => $sent
                ? 'SMS envoyé avec succès.'
                : 'Échec de l\'envoi SMS. Vérifiez les logs Twilio.',
        ], $sent ? 200 : 500);
    }

    /**
     * API — Envoie un SMS de confirmation de paiement formaté
     *
     * POST /marketplace/api/sms/payment-confirm
     * Body JSON : { "order_id": "BZ-xxx", "amount": "29.90", "products": "NomProduit1, NomProduit2" }
     */
    #[Route('/api/sms/payment-confirm', name: 'api_sms_payment_confirm', methods: ['POST'])]
    public function apiSmsPaymentConfirm(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $orderId = trim($data['order_id'] ?? ('BZ-' . date('Ymd') . '-' . rand(1000, 9999)));
        $amount = trim($data['amount'] ?? '0.00');
        $products = trim($data['products'] ?? 'Articles Marketplace');

        $smsBody = sprintf(
            "✅ Bonjour ! Votre paiement a été validé avec succès sur BizCore.\n" .
            "Commande : #%s\n" .
            "Produit(s) : %s\n" .
            "Total réglé : %s EUR\n" .
            "Merci pour votre confiance et à très bientôt ! 🌟",
            $orderId,
            $products,
            $amount
        );

        $sent = $this->smsService->send($smsBody);

        return new JsonResponse([
            'success' => $sent,
            'to' => '+21696694983',
            'order_id' => $orderId,
            'amount' => $amount,
            'message' => $sent
                ? 'SMS de confirmation envoyé avec succès.'
                : 'Échec de l\'envoi de la notification. Vérifiez les logs Telegram.',
        ], $sent ? 200 : 500);
    }

    #[Route('/favorites', name: 'favorites')]
    public function favorites(RequestStack $requestStack, \App\Repository\ProductRepository $productRepo): Response
    {
        $session = $requestStack->getSession();
        $favoritesIds = $session->get('favorites', []);

        $products = [];
        if (!empty($favoritesIds)) {
            $products = $productRepo->findBy(['idProduit' => $favoritesIds]);
        }

        $cart = $session->get('cart', []);
        $cartCount = array_sum($cart);
        $categories = $productRepo->createQueryBuilder('p')
            ->select('DISTINCT p.categorie')
            ->where('p.categorie IS NOT NULL')
            ->getQuery()
            ->getSingleColumnResult();
        $categories = array_filter($categories);

        return $this->render('marketplace/favorites.html.twig', [
            'products' => $products,
            'cart_count' => $cartCount,
            'categories' => $categories,
            'favorites' => $favoritesIds,
        ]);
    }

    #[Route('/api/favorites/toggle/{id}', name: 'api_favorites_toggle', methods: ['POST'])]
    public function toggleFavorite(int $id, RequestStack $requestStack): JsonResponse
    {
        $session = $requestStack->getSession();
        $favorites = $session->get('favorites', []);

        if (in_array($id, $favorites)) {
            $favorites = array_diff($favorites, [$id]);
            $isFavorite = false;
        } else {
            $favorites[] = $id;
            $isFavorite = true;
        }

        $session->set('favorites', array_values($favorites));

        return new JsonResponse([
            'success' => true,
            'isFavorite' => $isFavorite,
            'count' => count($favorites)
        ]);
    }

    /**
     * GET /marketplace/api/flash-promos
     * Retourne toutes les promotions flash actives avec le calcul des prix côté serveur.
     * Le frontend ne peut pas falsifier ce point d'entrée.
     */
    #[Route('/api/flash-promos', name: 'api_flash_promos', methods: ['GET'])]
    public function getActiveFlashPromos(FlashPromotionService $promoService): JsonResponse
    {
        $active = $promoService->getAllActive();
        return new JsonResponse(['promos' => $active, 'serverTime' => time()]);
    }
}
