<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // Homepage (choice page or redirect if logged in)
    #[Route('/', name: 'home', methods: ['GET'])]
    public function home(): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('dashboard');
        }

        return $this->render('home/choice.html.twig');
    }

    // Frontend blog (user side)
    #[Route('/blog', name: 'frontend_blog', methods: ['GET'])]
    public function blog(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('home/index.html.twig', [
            'articles' => $articles
        ]);
    }
}