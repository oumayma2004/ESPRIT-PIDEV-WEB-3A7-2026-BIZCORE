<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // ✅ STEP 1: Homepage (choice page)
    #[Route('/', name: 'home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('home/choice.html.twig');
    }

    // ✅ STEP 2: Frontend blog (user side)
    #[Route('/blog', name: 'frontend_blog', methods: ['GET'])]
    public function blog(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('home/index.html.twig', [
            'articles' => $articles
        ]);
    }
}