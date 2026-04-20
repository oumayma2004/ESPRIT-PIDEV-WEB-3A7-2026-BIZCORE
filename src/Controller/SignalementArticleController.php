<?php

namespace App\Controller;

use App\Entity\SignalementArticle;
use App\Form\SignalementArticleType;
use App\Repository\ArticleRepository;
use App\Repository\SignalementArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * CRUD frontend — Signalements d'articles par les utilisateurs
 *
 * Routes :
 *   GET  /signalement              → mes signalements (liste)
 *   GET/POST /signalement/new/{id} → signaler un article
 *   GET  /signalement/{id}         → voir mon signalement
 *   GET/POST /signalement/{id}/edit → modifier mon signalement (si en_attente)
 *   POST /signalement/{id}/delete  → supprimer mon signalement (si en_attente)
 */
#[Route('/signalement')]
class SignalementArticleController extends AbstractController
{
    // ──────────────────────────────────────────────────────────────
    // LIST — mes signalements
    // ──────────────────────────────────────────────────────────────
    #[Route('', name: 'signalement_index', methods: ['GET'])]
    public function index(
        SignalementArticleRepository $repo,
        ArticleRepository $articleRepo
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $userId       = $this->getUser()->getId();
        $signalements = $repo->findByUser($userId);

        // Build article map for display (id → titre)
        $articleMap = [];
        foreach ($signalements as $s) {
            $articleId = $s->getIdArticle();
            if (!isset($articleMap[$articleId])) {
                $article = $articleRepo->find($articleId);
                $articleMap[$articleId] = $article ? $article->getTitre() : '(article supprimé)';
            }
        }

        return $this->render('signalement/index.html.twig', [
            'signalements' => $signalements,
            'article_map'  => $articleMap,
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // NEW — signaler un article (depuis /blog/{id})
    // ──────────────────────────────────────────────────────────────
    #[Route('/new/{id_article}', name: 'signalement_new', methods: ['GET', 'POST'], requirements: ['id_article' => '\d+'])]
    public function new(
        int $id_article,
        Request $request,
        ArticleRepository $articleRepo,
        SignalementArticleRepository $repo,
        EntityManagerInterface $em
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $article = $articleRepo->find($id_article);
        if (!$article) {
            throw $this->createNotFoundException('Article introuvable.');
        }

        $userId = $this->getUser()->getId();

        // Guard — one signalement per user per article
        if ($repo->hasUserReported($userId, $id_article)) {
            $this->addFlash('warning', 'Vous avez déjà signalé cet article. Vous pouvez modifier votre signalement.');
            return $this->redirectToRoute('signalement_index');
        }

        $signalement = new SignalementArticle();
        $signalement->setIdArticle($id_article)->setIdUser($userId);

        $form = $this->createForm(SignalementArticleType::class, $signalement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($signalement);
            $em->flush();

            $this->addFlash('success', 'Votre signalement a été soumis. Notre équipe va l\'examiner.');
            return $this->redirectToRoute('frontend_blog_show', ['id' => $id_article]);
        }

        return $this->render('signalement/new.html.twig', [
            'form'    => $form->createView(),
            'article' => $article,
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // SHOW — détail d'un signalement
    // ──────────────────────────────────────────────────────────────
    #[Route('/{id}', name: 'signalement_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(
        int $id,
        SignalementArticleRepository $repo,
        ArticleRepository $articleRepo
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $signalement = $repo->find($id);
        if (!$signalement || $signalement->getIdUser() !== $this->getUser()->getId()) {
            throw $this->createNotFoundException('Signalement introuvable.');
        }

        $article = $articleRepo->find($signalement->getIdArticle());

        return $this->render('signalement/show.html.twig', [
            'signalement' => $signalement,
            'article'     => $article,
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // EDIT — modifier un signalement (seulement si en_attente)
    // ──────────────────────────────────────────────────────────────
    #[Route('/{id}/edit', name: 'signalement_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(
        int $id,
        Request $request,
        SignalementArticleRepository $repo,
        ArticleRepository $articleRepo,
        EntityManagerInterface $em
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $signalement = $repo->find($id);
        if (!$signalement || $signalement->getIdUser() !== $this->getUser()->getId()) {
            throw $this->createNotFoundException('Signalement introuvable.');
        }

        // Can only edit if still pending
        if (!$signalement->isEnAttente()) {
            $this->addFlash('error', 'Ce signalement a déjà été traité et ne peut plus être modifié.');
            return $this->redirectToRoute('signalement_show', ['id' => $id]);
        }

        $article = $articleRepo->find($signalement->getIdArticle());
        $form    = $this->createForm(SignalementArticleType::class, $signalement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Votre signalement a été mis à jour.');
            return $this->redirectToRoute('signalement_show', ['id' => $id]);
        }

        return $this->render('signalement/edit.html.twig', [
            'form'        => $form->createView(),
            'signalement' => $signalement,
            'article'     => $article,
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // DELETE — supprimer un signalement (seulement si en_attente)
    // ──────────────────────────────────────────────────────────────
    #[Route('/{id}/delete', name: 'signalement_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(
        int $id,
        Request $request,
        SignalementArticleRepository $repo,
        EntityManagerInterface $em
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $signalement = $repo->find($id);
        if (!$signalement || $signalement->getIdUser() !== $this->getUser()->getId()) {
            throw $this->createNotFoundException('Signalement introuvable.');
        }

        if (!$signalement->isEnAttente()) {
            $this->addFlash('error', 'Ce signalement a déjà été traité et ne peut pas être supprimé.');
            return $this->redirectToRoute('signalement_index');
        }

        if ($this->isCsrfTokenValid('delete' . $id, $request->request->get('_token'))) {
            $em->remove($signalement);
            $em->flush();
            $this->addFlash('success', 'Votre signalement a été retiré.');
        }

        return $this->redirectToRoute('signalement_index');
    }
}