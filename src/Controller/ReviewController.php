<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Service\SocialReviewService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
    #[Route('/marketplace/api/reviews/{slug}', name: 'api_social_reviews', methods: ['GET'])]
    public function getReviewsJson(string $slug, SocialReviewService $reviewService): JsonResponse
    {
        $data = $reviewService->getReviewsForProduct($slug);
        return new JsonResponse($data);
    }

    #[Route('/marketplace/product/{id}/reviews', name: 'product_social_reviews', methods: ['GET'])]
    public function showReviewsPage(int $id, ProductRepository $productRepo, SocialReviewService $reviewService): Response
    {
        $product = $productRepo->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Produit introuvable');
        }

        $data = $reviewService->getReviewsForProduct($product->getNomProduit());

        return $this->render('marketplace/reviews.html.twig', [
            'product' => $product,
            'summary' => $data['summary'],
            'reviews' => $data['reviews'],
        ]);
    }
}
