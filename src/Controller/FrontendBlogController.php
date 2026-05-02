<?php

namespace App\Controller;

use App\Entity\ArticleReaction;
use App\Repository\ArticleRepository;
use App\Repository\ArticleReactionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontendBlogController extends AbstractController
{
    // ──────────────────────────────────────────────────────────────
    // GET /blog  — article listing (user side)
    // ──────────────────────────────────────────────────────────────
    #[Route('/blog', name: 'frontend_blog_index', methods: ['GET'])]
    public function index(Request $request, ArticleRepository $articleRepository): Response
    {
        $sortBy  = $request->query->get('sortBy', 'id_article');
        $sortDir = $request->query->get('sortDir', 'DESC');

        return $this->render('blog/index.html.twig', [
            'articles' => $articleRepository->findAllSorted($sortBy, $sortDir),
            'sortBy'   => $sortBy,
            'sortDir'  => $sortDir,
            'mode'     => 'user',
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // GET /blog/{id}  — article detail with reactions
    // ──────────────────────────────────────────────────────────────
    #[Route('/blog/{id}', name: 'frontend_blog_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(
        int $id,
        ArticleRepository $articleRepository,
        ArticleReactionRepository $reactionRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $article = $articleRepository->find($id);
        if (!$article) {
            throw $this->createNotFoundException('Article introuvable.');
        }

        // Increment view count — frontend only (admin show does NOT count)
        $article->setNombreVues($article->getNombreVues() + 1);
        $entityManager->flush();

        // Reaction counts per type
        $countsRaw = $reactionRepository->countByTypeForArticle($id);
        $counts = ['like' => 0, 'bookmark' => 0, 'share' => 0, 'helpful' => 0];
        foreach ($countsRaw as $row) {
            $counts[$row['type_reaction']] = (int) $row['total'];
        }

        // Average star note
        $avgNote = $reactionRepository->averageNoteForArticle($id);

        // Current user's reactions (for button active states)
        $userReactions = [];
        if ($this->getUser()) {
            $existing = $reactionRepository->findByUser($this->getUser()->getId());
            foreach ($existing as $r) {
                if ($r->getIdArticle() === $id) {
                    $userReactions[$r->getTypeReaction()] = true;
                }
            }
        }

        return $this->render('blog/show.html.twig', [
            'article'        => $article,
            'counts'         => $counts,
            'avg_note'       => $avgNote,
            'user_reactions' => $userReactions,
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // POST /blog/{id}/react  — toggle a reaction (AJAX)
    //
    // JSON body: { type, note (optional 1-5), avis (optional), anonymous }
    // Returns:   { success, active, counts, avg_note }
    // ──────────────────────────────────────────────────────────────
    #[Route('/blog/{id}/react', name: 'frontend_blog_react', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function react(
        int $id,
        Request $request,
        ArticleRepository $articleRepository,
        ArticleReactionRepository $reactionRepository,
        EntityManagerInterface $em
    ): JsonResponse {
        if (!$this->getUser()) {
            return new JsonResponse(['success' => false, 'message' => 'Vous devez être connecté pour réagir.'], 401);
        }

        $article = $articleRepository->find($id);
        if (!$article) {
            return new JsonResponse(['success' => false, 'message' => 'Article introuvable.'], 404);
        }

        // Read payload (JSON or form POST)
        $data = [];
        if (str_contains($request->headers->get('Content-Type', ''), 'application/json')) {
            $data = json_decode($request->getContent(), true) ?? [];
        } else {
            $data = $request->request->all();
        }

        $type      = trim((string) ($data['type'] ?? ''));
        $note      = isset($data['note']) && $data['note'] !== '' ? (int) $data['note'] : null;
        $avis      = isset($data['avis']) ? mb_substr(trim((string) $data['avis']), 0, 500) : null;
        $anonymous = !empty($data['anonymous']);

        if (!in_array($type, ArticleReaction::allowedTypes(), true)) {
            return new JsonResponse(['success' => false, 'message' => 'Type de réaction invalide.'], 400);
        }
        if ($note !== null && ($note < 1 || $note > 5)) {
            return new JsonResponse(['success' => false, 'message' => 'La note doit être entre 1 et 5.'], 400);
        }

        $userId   = $this->getUser()->getId();
        $existing = $reactionRepository->findOneByUserArticleType($userId, $id, $type);

        if ($existing) {
            // Toggle OFF — remove
            $em->remove($existing);
            $em->flush();
            $active = false;
        } else {
            // Toggle ON — insert
            $reaction = (new ArticleReaction())
                ->setIdArticle($id)
                ->setIdUser($userId)
                ->setTypeReaction($type)
                ->setNote($note)
                ->setAvis($avis ?: null)
                ->setIsAnonymous($anonymous);

            $em->persist($reaction);
            $em->flush();
            $active = true;
        }

        // Fresh counts
        $countsRaw = $reactionRepository->countByTypeForArticle($id);
        $counts    = ['like' => 0, 'bookmark' => 0, 'share' => 0, 'helpful' => 0];
        foreach ($countsRaw as $row) {
            $counts[$row['type_reaction']] = (int) $row['total'];
        }

        return new JsonResponse([
            'success'  => true,
            'active'   => $active,
            'type'     => $type,
            'counts'   => $counts,
            'avg_note' => $reactionRepository->averageNoteForArticle($id),
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // GET /blog/{id}/reactions  — public counts (for card badges)
    // ──────────────────────────────────────────────────────────────
    #[Route('/blog/{id}/reactions', name: 'frontend_blog_reactions', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function reactions(int $id, ArticleReactionRepository $reactionRepository): JsonResponse
    {
        $countsRaw = $reactionRepository->countByTypeForArticle($id);
        $counts    = ['like' => 0, 'bookmark' => 0, 'share' => 0, 'helpful' => 0];
        foreach ($countsRaw as $row) {
            $counts[$row['type_reaction']] = (int) $row['total'];
        }

        return new JsonResponse([
            'success'  => true,
            'counts'   => $counts,
            'avg_note' => $reactionRepository->averageNoteForArticle($id),
        ]);
    }

    // ──────────────────────────────────────────────────────────────
    // GET /blog/{id}/avis  — full reactions list with user info
    //
    // Used by:
    //   - frontend show.html.twig → displays avis cards to readers
    //   - admin article/show.html.twig → displays engagement table
    //
    // Returns: { success, data: [ {id, type_reaction, note, avis,
    //            date_reaction, is_anonymous, nom, prenom} ] }
    // ──────────────────────────────────────────────────────────────
    #[Route('/blog/{id}/avis', name: 'frontend_blog_avis', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function avis(
        int $id,
        ArticleReactionRepository $reactionRepository,
        UserRepository $userRepository
    ): JsonResponse {
        $reactions = $reactionRepository->findByArticle($id);

        $data = array_map(function (ArticleReaction $r) use ($userRepository) {
            $nom    = null;
            $prenom = null;

            // Only fetch user name if not anonymous
            if (!$r->isAnonymous()) {
                $user = $userRepository->find($r->getIdUser());
                if ($user) {
                    $nom    = $user->getNom();
                    $prenom = $user->getPrenom();
                }
            }

            return [
                'id'             => $r->getIdReaction(),
                'type_reaction'  => $r->getTypeReaction(),
                'note'           => $r->getNote(),
                'avis'           => $r->getAvis(),
                'date_reaction'  => $r->getDateReaction()->format('Y-m-d H:i:s'),
                'is_anonymous'   => $r->isAnonymous(),
                'nom'            => $nom,
                'prenom'         => $prenom,
            ];
        }, $reactions);

        // Only show entries that have an avis OR a note — skip bare bookmarks/shares in the avis list
        // Comment out the line below if you want to show ALL reactions
        $data = array_values(array_filter($data, fn($d) => $d['avis'] !== null || $d['note'] !== null));

        return new JsonResponse(['success' => true, 'data' => $data]);
    }
}