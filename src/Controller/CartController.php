<?php

namespace App\Controller;

use App\Service\FlashPromotionService;
use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart', name: 'cart_')]
class CartController extends AbstractController
{
    public function __construct(
        private ProductService       $productService,
        private FlashPromotionService $promoService,
    ) {}

    /**
     * Affiche le panier
     */
    #[Route('', name: 'index')]
    public function index(Request $request): Response
    {
        $session  = $request->getSession();
        $cart     = $session->get('cart', []);
        $items    = $this->buildCartItems($cart);
        $subtotal = array_sum(array_map(fn($i) => $i['prix'] * $i['quantity'], $items));

        return $this->render('cart/index.html.twig', [
            'items'    => $items,
            'subtotal' => $subtotal,
        ]);
    }

    /**
     * Ajouter un produit au panier
     * Si une promo flash est active pour le vendeur, le prix remisé est appliqué côté serveur.
     */
    #[Route('/add/{id}', name: 'add', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function add(int $id, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('cart_add_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('marketplace_index');
        }

        $product = $this->productService->getProductById($id);
        if (!$product) {
            $this->addFlash('error', 'Produit introuvable.');
            return $this->redirectToRoute('marketplace_index');
        }

        $session = $request->getSession();
        $cart    = $session->get('cart', []);

        // ── Vérification promo flash côté serveur ──
        $originalPrice = (float)$product->getPrix();
        $finalPrice    = $originalPrice;
        $promoApplied  = false;
        $discountPct   = 0;

        try {
            $vendeurId = $product->getVendeur()?->getId();
            if ($vendeurId) {
                $promo = $this->promoService->getActive($vendeurId);
                if ($promo !== null) {
                    $discountPct  = $promo['discountPercent'];
                    $finalPrice   = $this->promoService->computeDiscountedPrice($originalPrice, $discountPct);
                    $promoApplied = true;
                }
            }
        } catch (\Throwable) {
            // Si la vérification promo échoue, on continue avec le prix normal
            $finalPrice   = $originalPrice;
            $promoApplied = false;
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            // Mise à jour du prix si la promo a changé depuis l'ajout initial
            if ($promoApplied) {
                $cart[$id]['prix']         = $finalPrice;
                $cart[$id]['prixOriginal'] = $originalPrice;
                $cart[$id]['discountPct']  = $discountPct;
                $cart[$id]['promo']        = true;
            }
        } else {
            $cart[$id] = [
                'productId'    => $id,
                'nomProduit'   => $product->getNomProduit(),
                'prix'         => $finalPrice,
                'prixOriginal' => $originalPrice,
                'discountPct'  => $discountPct,
                'promo'        => $promoApplied,
                'categorie'    => $product->getCategorie(),
                'imageUrl'     => $product->getImageUrl(),
                'quantity'     => 1,
            ];
        }

        $session->set('cart', $cart);

        if ($promoApplied) {
            $this->addFlash('success', sprintf(
                '⚡ « %s » ajouté au panier avec -%d%% ! Prix promo : %.2f € (au lieu de %.2f €)',
                $product->getNomProduit(), $discountPct, $finalPrice, $originalPrice
            ));
        } else {
            $this->addFlash('success', "« {$product->getNomProduit()} » ajouté au panier !");
        }

        return $this->redirectToRoute('marketplace_index');
    }

    /**
     * Mettre à jour la quantité d'un article
     */
    #[Route('/update/{id}', name: 'update', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function update(int $id, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('cart_update_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('cart_index');
        }

        $session = $request->getSession();
        $cart    = $session->get('cart', []);
        $qty     = (int)$request->request->get('qty', 1);

        if (isset($cart[$id])) {
            if ($qty <= 0) {
                unset($cart[$id]);
            } else {
                $cart[$id]['quantity'] = $qty;
            }
        }

        $session->set('cart', $cart);
        return $this->redirectToRoute('cart_index');
    }

    /**
     * Supprimer un article du panier
     */
    #[Route('/remove/{id}', name: 'remove', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function remove(int $id, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('cart_remove_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('cart_index');
        }

        $session = $request->getSession();
        $cart    = $session->get('cart', []);
        unset($cart[$id]);
        $session->set('cart', $cart);

        $this->addFlash('success', 'Article retiré du panier.');
        return $this->redirectToRoute('cart_index');
    }

    /**
     * Vider le panier
     */
    #[Route('/clear', name: 'clear', methods: ['POST'])]
    public function clear(Request $request): Response
    {
        if (!$this->isCsrfTokenValid('cart_clear', $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('cart_index');
        }

        $request->getSession()->set('cart', []);
        $this->addFlash('success', 'Panier vidé.');
        return $this->redirectToRoute('marketplace_index');
    }

    // ── Helper ────────────────────────────────────────────────────────────────

    private function buildCartItems(array $cart): array
    {
        $items = [];
        foreach ($cart as $id => $data) {
            $items[] = [
                'productId'    => $id,
                'nomProduit'   => $data['nomProduit'],
                'prix'         => $data['prix'],
                'prixOriginal' => $data['prixOriginal'] ?? $data['prix'],
                'discountPct'  => $data['discountPct']  ?? 0,
                'promo'        => $data['promo']         ?? false,
                'categorie'    => $data['categorie']     ?? null,
                'imageUrl'     => $data['imageUrl']      ?? null,
                'quantity'     => $data['quantity'],
            ];
        }
        return $items;
    }
}
