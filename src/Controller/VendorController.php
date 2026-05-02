<?php

namespace App\Controller;

use App\Entity\Vendor;
use App\Form\VendorType;
use App\Repository\VendorRepository;
use App\Service\FlashPromotionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/vendors', name: 'vendor_')]
class VendorController extends AbstractController
{
    public function __construct(
        private readonly VendorRepository      $vendorRepository,
        private readonly EntityManagerInterface $em
    ) {}

    // ══════════════════════════════════════════════════════════════════
    //  INDEX — liste tous les vendeurs avec leur nombre de produits
    // ══════════════════════════════════════════════════════════════════
    #[Route('', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        // findAllWithProductCount retourne des tableaux [0 => Vendor, 'productCount' => int]
        $rows = $this->vendorRepository->findAllWithProductCount();

        return $this->render('vendor/index.html.twig', [
            'rows' => $rows,
        ]);
    }

    // ══════════════════════════════════════════════════════════════════
    //  SHOW — détail d'un vendeur et ses produits
    // ══════════════════════════════════════════════════════════════════
    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        $vendor = $this->vendorRepository->find($id);
        if (!$vendor) {
            $this->addFlash('error', 'Vendeur introuvable.');
            return $this->redirectToRoute('vendor_index');
        }

        return $this->render('vendor/show.html.twig', [
            'vendor' => $vendor,
        ]);
    }

    // ══════════════════════════════════════════════════════════════════
    //  NEW — création d'un nouveau vendeur
    // ══════════════════════════════════════════════════════════════════
    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $vendor = new Vendor();
        $form   = $this->createForm(VendorType::class, $vendor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->em->persist($vendor);
                // Explicitly persist linked products since we added them from Vendor form
                foreach ($vendor->getProducts() as $produit) {
                    $produit->setVendeur($vendor);
                    $this->em->persist($produit);
                }
                
                $this->em->flush();
                $this->addFlash('success', "Vendeur « {$vendor->getNom()} » créé avec succès !");
                return $this->redirectToRoute('vendor_index');
            } catch (\Exception $e) {
                $this->addFlash('error', $this->formatDbError($e));
            }
        }

        return $this->render('vendor/form.html.twig', [
            'form'   => $form->createView(),
            'vendor' => $vendor,
            'mode'   => 'new',
        ]);
    }

    // ══════════════════════════════════════════════════════════════════
    //  EDIT — modification d'un vendeur existant
    // ══════════════════════════════════════════════════════════════════
    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(int $id, Request $request): Response
    {
        $vendor = $this->vendorRepository->find($id);
        if (!$vendor) {
            $this->addFlash('error', 'Vendeur introuvable.');
            return $this->redirectToRoute('vendor_index');
        }

        // Keep track of original products to handle unassignment
        $originalProducts = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($vendor->getProducts() as $product) {
            $originalProducts->add($product);
        }

        $form = $this->createForm(VendorType::class, $vendor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // If a product was removed from the collection
                foreach ($originalProducts as $product) {
                    if (false === $vendor->getProducts()->contains($product)) {
                        $product->setVendeur(null);
                        $this->em->persist($product);
                    }
                }
                
                // For all current products, ensure they are attached and persisted
                foreach ($vendor->getProducts() as $produit) {
                    $produit->setVendeur($vendor);
                    $this->em->persist($produit);
                }
                
                $this->em->flush();
                $this->addFlash('success', "Vendeur « {$vendor->getNom()} » modifié avec succès !");
                return $this->redirectToRoute('vendor_index');
            } catch (\Exception $e) {
                $this->addFlash('error', $this->formatDbError($e));
            }
        }

        return $this->render('vendor/form.html.twig', [
            'form'   => $form->createView(),
            'vendor' => $vendor,
            'mode'   => 'edit',
        ]);
    }

    // ══════════════════════════════════════════════════════════════════
    //  DELETE — suppression avec confirmation CSRF
    // ══════════════════════════════════════════════════════════════════
    #[Route('/{id}/delete', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(int $id, Request $request, \App\Service\ProductService $productService): Response
    {
        $vendor = $this->vendorRepository->find($id);
        if (!$vendor) {
            $this->addFlash('error', 'Vendeur introuvable.');
            return $this->redirectToRoute('vendor_index');
        }

        if (!$this->isCsrfTokenValid('delete_vendor_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token de sécurité invalide. Suppression annulée.');
            return $this->redirectToRoute('vendor_index');
        }

        $nom = $vendor->getNom();
        try {
            // Supprimer les produits au lieu de les dissocier
            foreach ($vendor->getProducts() as $product) {
                $productService->deleteProduct($product->getIdProduit());
            }

            $this->em->remove($vendor);
            $this->em->flush();
            $this->addFlash('success', "Vendeur « {$nom} » et tous ses produits associés ont été supprimés avec succès.");
        } catch (\Exception $e) {
            $this->addFlash('error', $this->formatDbError($e));
        }

        return $this->redirectToRoute('vendor_index');
    }

    // ══════════════════════════════════════════════════════════════════
    //  CONFIRM DELETE — page de confirmation avant suppression
    // ══════════════════════════════════════════════════════════════════
    #[Route('/{id}/confirm-delete', name: 'confirm_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function confirmDelete(int $id): Response
    {
        $vendor = $this->vendorRepository->find($id);
        if (!$vendor) {
            $this->addFlash('error', 'Vendeur introuvable.');
            return $this->redirectToRoute('vendor_index');
        }

        return $this->render('vendor/confirm_delete.html.twig', [
            'vendor' => $vendor,
        ]);
    }

    // ══════════════════════════════════════════════════════════════════
    //  FLASH PROMO — Activation d'une promotion flash (admin uniquement)
    // ══════════════════════════════════════════════════════════════════

    /**
     * POST /admin/vendors/{id}/flash-promo
     * Body JSON : { "discount": 20 }
     * Active une promotion flash de 60 secondes pour tous les produits du vendeur.
     */
    #[Route('/{id}/flash-promo', name: 'flash_promo_activate', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function activateFlashPromo(int $id, Request $request, FlashPromotionService $promoService): JsonResponse
    {
        $vendor = $this->vendorRepository->find($id);
        if (!$vendor) {
            return $this->json(['success' => false, 'message' => 'Vendeur introuvable'], 404);
        }

        $data     = json_decode($request->getContent(), true);
        $discount = (int)($data['discount'] ?? 0);
        $duration = (int)($data['duration_seconds'] ?? 60); // défaut 60 s

        // Validation stricte côté serveur
        if ($discount < 5 || $discount > 90) {
            return $this->json(['success' => false, 'message' => 'Pourcentage invalide (entre 5 % et 90 %)'], 400);
        }
        if ($duration < 60 || $duration > 3600) {
            return $this->json(['success' => false, 'message' => 'Durée invalide (entre 1 min et 60 min)'], 400);
        }

        $promo = $promoService->activate($id, $vendor->getNom(), $discount, $duration);

        $mins = intdiv($duration, 60);
        $secs = $duration % 60;
        $dureeLabel = $mins > 0
            ? ($secs > 0 ? "{$mins} min {$secs} s" : "{$mins} min")
            : "{$secs} s";

        return $this->json([
            'success'          => true,
            'message'          => sprintf('Promotion flash de %d%% activée pour « %s » pendant %s.', $discount, $vendor->getNom(), $dureeLabel),
            'discountPercent'  => $promo['discountPercent'],
            'durationSeconds'  => $duration,
            'expiresAt'        => $promo['expiresAt'],
            'remainingSeconds' => $duration,
        ]);
    }

    /**
     * GET /admin/vendors/{id}/flash-promo/status
     * Retourne le statut de la promo active (pour le dashboard admin/vendeur).
     */
    #[Route('/{id}/flash-promo/status', name: 'flash_promo_status', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function flashPromoStatus(int $id, FlashPromotionService $promoService): JsonResponse
    {
        return $this->json($promoService->getStatus($id));
    }

    /**
     * POST /admin/vendors/{id}/flash-promo/cancel
     * Annule manuellement la promo d'un vendeur.
     */
    #[Route('/{id}/flash-promo/cancel', name: 'flash_promo_cancel', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function cancelFlashPromo(int $id, FlashPromotionService $promoService): JsonResponse
    {
        $vendor = $this->vendorRepository->find($id);
        $promoService->cancel($id);
        return $this->json([
            'success' => true,
            'message' => 'Promotion flash annulée.',
        ]);
    }

    /**
     * POST /admin/vendors/{id}/flash-promo/ai-suggest
     * L'IA analyse les produits du vendeur et suggère automatiquement
     * le meilleur pourcentage de remise + la durée optimale, puis active la promo.
     */
    #[Route('/{id}/flash-promo/ai-suggest', name: 'flash_promo_ai_suggest', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function aiSuggestFlashPromo(
        int $id,
        FlashPromotionService $promoService,
        \Symfony\Contracts\HttpClient\HttpClientInterface $httpClient,
        \App\Repository\ProductRepository $productRepo,
    ): JsonResponse {
        $vendor = $this->vendorRepository->find($id);
        if (!$vendor) {
            return $this->json(['success' => false, 'message' => 'Vendeur introuvable'], 404);
        }

        // Récupérer les produits du vendeur
        $products  = $productRepo->findBy(['vendeur' => $vendor]);
        $openaiKey = $_ENV['OPENAI_API_KEY'] ?? '';

        if (!$openaiKey || str_starts_with($openaiKey, 'sk-proj-VOTRE')) {
            return $this->json(['success' => false, 'message' => 'Clé OpenAI non configurée.'], 500);
        }

        // Construire le contexte produits pour l'IA
        $productLines = [];
        foreach ($products as $p) {
            $productLines[] = sprintf(
                '- %s | Prix: %s€ | Catégorie: %s | Stock: %d | Note: %.1f/5',
                $p->getNomProduit(),
                $p->getPrix(),
                $p->getCategorie() ?? 'N/A',
                $p->getStockDisponible(),
                $p->getRating() ?? 0
            );
        }
        $productsText = empty($productLines) ? 'Aucun produit.' : implode("\n", $productLines);

        $prompt = <<<PROMPT
Tu es un expert en stratégie commerciale e-commerce.
Analyse les produits du vendeur "{$vendor->getNom()}" et propose une promotion flash optimale.

Produits du vendeur :
{$productsText}

Réponds UNIQUEMENT avec un objet JSON valide (sans markdown, sans explication), exactement dans ce format :
{
  "discount": 20,
  "duration_seconds": 180,
  "reason": "Explication courte en français de 1 sentence max."
}

Règles :
- "discount" : entre 10 et 60 (pourcentage entier)
- "duration_seconds" : 60, 120, 180, 300 ou 600 uniquement
- Choisir la remise selon le stock et la note des produits
PROMPT;

        try {
            $response = $httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'timeout' => 20,
                'headers' => [
                    'Authorization' => 'Bearer ' . $openaiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model'       => 'gpt-4o-mini',
                    'messages'    => [
                        ['role' => 'system', 'content' => 'Tu es un expert en promotion e-commerce. Tu réponds UNIQUEMENT en JSON valide.'],
                        ['role' => 'user',   'content' => $prompt],
                    ],
                    'max_tokens'  => 120,
                    'temperature' => 0.4,
                ],
            ]);

            $data    = $response->toArray(false);
            $content = trim($data['choices'][0]['message']['content'] ?? '');

            // Nettoyer si l'IA met des backticks markdown
            $content = preg_replace('/^```json\s*/i', '', $content);
            $content = preg_replace('/```$/', '', $content);
            $content = trim($content);

            $suggestion = json_decode($content, true);

            if (!is_array($suggestion) || !isset($suggestion['discount'], $suggestion['duration_seconds'])) {
                return $this->json(['success' => false, 'message' => "L'IA a retourné une réponse invalide. Réessayez."], 500);
            }

            $discount = max(10, min(60, (int)$suggestion['discount']));
            $duration = in_array((int)$suggestion['duration_seconds'], [60, 120, 180, 300, 600])
                ? (int)$suggestion['duration_seconds']
                : 180;
            $reason   = $suggestion['reason'] ?? 'Suggestion IA';

            // Activer la promo avec les paramètres IA
            $promo = $promoService->activate($id, $vendor->getNom(), $discount, $duration);

            $mins = intdiv($duration, 60);
            $secs = $duration % 60;
            $dureeLabel = $secs > 0 ? "{$mins} min {$secs} s" : "{$mins} min";

            return $this->json([
                'success'          => true,
                'ai'               => true,
                'discount'         => $discount,
                'duration_seconds' => $duration,
                'durationLabel'    => $dureeLabel,
                'reason'           => $reason,
                'remainingSeconds' => $duration,
                'expiresAt'        => $promo['expiresAt'],
                'message'          => "🤖 IA : Promo -{$discount}% pendant {$dureeLabel} activée pour « {$vendor->getNom()} ».",
            ]);

        } catch (\Throwable $e) {
            return $this->json(['success' => false, 'message' => 'Erreur IA : ' . $e->getMessage()], 500);
        }
    }

    // ══════════════════════════════════════════════════════════════════
    //  Helpers
    // ══════════════════════════════════════════════════════════════════
    private function formatDbError(\Exception $e): string
    {
        $msg = $e->getPrevious()?->getMessage() ?? $e->getMessage();
        if (str_contains($msg, 'Duplicate entry') || str_contains($msg, 'unique')) {
            return 'Cet e-mail est déjà utilisé par un autre vendeur.';
        }
        if (str_contains($msg, 'foreign key') || str_contains($msg, 'constraint')) {
            return 'Impossible de supprimer : ce vendeur est lié à des données existantes.';
        }
        return 'Erreur base de données : ' . substr($msg, 0, 200);
    }
}
