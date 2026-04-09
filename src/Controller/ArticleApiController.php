<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ╔══════════════════════════════════════════════════════════════╗
 * ║              BLOG API — ArticleApiController                 ║
 * ║                                                              ║
 * ║  Base URL : /api/articles                                    ║
 * ║  Scope    : Blog front-end (read) + view-count increment     ║
 * ╚══════════════════════════════════════════════════════════════╝
 *
 * ENDPOINTS
 * ─────────────────────────────────────────────────────────────────
 * GET    /api/articles            → list articles (filters, sort, search, pagination)
 * GET    /api/articles/stats      → blog statistics (KPIs, top 5, categories)
 * GET    /api/articles/categories → list distinct categories
 * GET    /api/articles/{id}       → single article detail
 * PATCH  /api/articles/{id}/view  → increment view count (+1)
 *
 * QUERY PARAMS for GET /api/articles
 * ─────────────────────────────────────────────────────────────────
 *   ?search=   full-text search on title + content
 *   ?categorie= filter by category (exact, case-insensitive)
 *   ?statut=   filter by statut (publié | brouillon | archivé)
 *   ?sortBy=   titre | nombre_vues | id_article   (default: id_article)
 *   ?sortDir=  ASC | DESC                         (default: DESC)
 *   ?page=     page number, starts at 1           (default: 1)
 *   ?limit=    items per page, max 50             (default: 9)
 *
 * ALL RESPONSES follow the same envelope:
 * ─────────────────────────────────────────────────────────────────
 *   { "success": true|false, "data": ..., "message": "..." }
 *
 * HTTP status codes used:
 *   200  OK
 *   404  Not Found
 *   400  Bad Request
 */
#[Route('/api/articles', name: 'api_article_')]
class ArticleApiController extends AbstractController
{
    // ──────────────────────────────────────────────────────────────
    // HELPER — builds a consistent JSON response envelope
    // ──────────────────────────────────────────────────────────────
    private function json_response(
        mixed  $data,
        bool   $success = true,
        string $message = 'OK',
        int    $status  = Response::HTTP_OK
    ): JsonResponse {
        return new JsonResponse([
            'success' => $success,
            'message' => $message,
            'data'    => $data,
        ], $status);
    }

    // ──────────────────────────────────────────────────────────────
    // HELPER — serializes one Article entity to a clean array
    // ──────────────────────────────────────────────────────────────
    private function serializeArticle(object $article): array
    {
        return [
            'id'              => $article->getIdArticle(),
            'titre'           => $article->getTitre(),
            'contenu'         => $article->getContenu(),
            'contenu_extrait' => mb_strimwidth(strip_tags($article->getContenu() ?? ''), 0, 200, '…'),
            'image_principale'=> $article->getImagePrincipale(),
            'categorie'       => $article->getCategorie(),
            'statut'          => $article->getStatut(),
            'nombre_vues'     => $article->getNombreVues(),
        ];
    }

    // ══════════════════════════════════════════════════════════════
    // GET /api/articles
    // List articles with optional filters, search, sort, pagination
    // ══════════════════════════════════════════════════════════════
    #[Route('', name: 'list', methods: ['GET'])]
    public function list(Request $request, ArticleRepository $repo): JsonResponse
    {
        // ── 1. Read & sanitize query params ──────────────────────
        $search    = trim((string) $request->query->get('search', ''));
        $categorie = trim((string) $request->query->get('categorie', ''));
        $statut    = trim((string) $request->query->get('statut', ''));

        $allowedSortBy  = ['titre', 'nombre_vues', 'id_article'];
        $allowedSortDir = ['ASC', 'DESC'];

        $sortBy  = $request->query->get('sortBy', 'id_article');
        $sortDir = strtoupper((string) $request->query->get('sortDir', 'DESC'));

        if (!in_array($sortBy, $allowedSortBy, true))  { $sortBy  = 'id_article'; }
        if (!in_array($sortDir, $allowedSortDir, true)) { $sortDir = 'DESC'; }

        $page  = max(1, (int) $request->query->get('page', 1));
        $limit = min(50, max(1, (int) $request->query->get('limit', 9)));

        // ── 2. Build DQL query ───────────────────────────────────
        $fieldMap = [
            'id_article'  => 'a.id_article',
            'titre'       => 'a.titre',
            'nombre_vues' => 'a.nombre_vues',
        ];

        $qb = $repo->createQueryBuilder('a');

        // Full-text search on title + content
        if ($search !== '') {
            $qb->andWhere('LOWER(a.titre) LIKE :search OR LOWER(a.contenu) LIKE :search')
               ->setParameter('search', '%' . strtolower($search) . '%');
        }

        // Category filter (case-insensitive)
        if ($categorie !== '') {
            $qb->andWhere('LOWER(a.categorie) = :categorie')
               ->setParameter('categorie', strtolower($categorie));
        }

        // Status filter
        if ($statut !== '') {
            $qb->andWhere('a.statut = :statut')
               ->setParameter('statut', $statut);
        }

        // Order
        $qb->orderBy($fieldMap[$sortBy], $sortDir);

        // ── 3. Count total (for pagination meta) ─────────────────
        $countQb = clone $qb;
        $total   = (int) $countQb->select('COUNT(a.id_article)')->getQuery()->getSingleScalarResult();

        // ── 4. Apply pagination ───────────────────────────────────
        $offset = ($page - 1) * $limit;
        $qb->select('a')->setFirstResult($offset)->setMaxResults($limit);
        $articles = $qb->getQuery()->getResult();

        // ── 5. Serialize ──────────────────────────────────────────
        $data = array_map(fn($a) => $this->serializeArticle($a), $articles);

        return $this->json_response([
            'articles'    => $data,
            'pagination'  => [
                'page'        => $page,
                'limit'       => $limit,
                'total'       => $total,
                'total_pages' => (int) ceil($total / $limit),
                'has_next'    => ($page * $limit) < $total,
                'has_prev'    => $page > 1,
            ],
            'filters'     => [
                'search'    => $search,
                'categorie' => $categorie,
                'statut'    => $statut,
                'sortBy'    => $sortBy,
                'sortDir'   => $sortDir,
            ],
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    // GET /api/articles/stats
    // Returns blog-wide statistics (must be declared BEFORE /{id})
    // ══════════════════════════════════════════════════════════════
    #[Route('/stats', name: 'stats', methods: ['GET'])]
    public function stats(ArticleRepository $repo): JsonResponse
    {
        $articles = $repo->findAll();

        if (empty($articles)) {
            return $this->json_response([
                'total'        => 0,
                'publie'       => 0,
                'brouillon'    => 0,
                'archive'      => 0,
                'total_vues'   => 0,
                'moy_vues'     => 0,
                'categories'   => [],
                'top5'         => [],
            ]);
        }

        $total      = count($articles);
        $publie     = count(array_filter($articles, fn($a) => $a->getStatut() === 'publié'));
        $brouillon  = count(array_filter($articles, fn($a) => $a->getStatut() === 'brouillon'));
        $archive    = count(array_filter($articles, fn($a) => $a->getStatut() === 'archivé'));
        $totalVues  = array_sum(array_map(fn($a) => $a->getNombreVues(), $articles));
        $moyVues    = round($totalVues / $total, 1);

        // Categories breakdown
        $catMap = [];
        foreach ($articles as $a) {
            $cat = $a->getCategorie() ?? 'Sans catégorie';
            $catMap[$cat] = ($catMap[$cat] ?? 0) + 1;
        }
        arsort($catMap);

        // Top 5 most viewed
        $sorted = $articles;
        usort($sorted, fn($x, $y) => $y->getNombreVues() <=> $x->getNombreVues());
        $top5 = array_map(fn($a) => [
            'id'         => $a->getIdArticle(),
            'titre'      => $a->getTitre(),
            'categorie'  => $a->getCategorie(),
            'nombre_vues'=> $a->getNombreVues(),
        ], array_slice($sorted, 0, 5));

        return $this->json_response([
            'total'       => $total,
            'publie'      => $publie,
            'brouillon'   => $brouillon,
            'archive'     => $archive,
            'total_vues'  => $totalVues,
            'moy_vues'    => $moyVues,
            'categories'  => $catMap,
            'top5'        => $top5,
        ]);
    }

    // ══════════════════════════════════════════════════════════════
    // GET /api/articles/categories
    // Returns the list of distinct categories
    // ══════════════════════════════════════════════════════════════
    #[Route('/categories', name: 'categories', methods: ['GET'])]
    public function categories(ArticleRepository $repo): JsonResponse
    {
        $rows = $repo->createQueryBuilder('a')
            ->select('DISTINCT a.categorie')
            ->where('a.categorie IS NOT NULL')
            ->orderBy('a.categorie', 'ASC')
            ->getQuery()
            ->getResult();

        $cats = array_filter(array_column($rows, 'categorie'));

        return $this->json_response(array_values($cats));
    }

    // ══════════════════════════════════════════════════════════════
    // GET /api/articles/{id}
    // Single article detail
    // ══════════════════════════════════════════════════════════════
    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id, ArticleRepository $repo): JsonResponse
    {
        $article = $repo->find($id);

        if (!$article) {
            return $this->json_response(
                null,
                false,
                "Article #$id introuvable.",
                Response::HTTP_NOT_FOUND
            );
        }

        return $this->json_response($this->serializeArticle($article));
    }

    // ══════════════════════════════════════════════════════════════
    // PATCH /api/articles/{id}/view
    // Increment view count by 1 (called when user clicks "Lire")
    // ══════════════════════════════════════════════════════════════
    #[Route('/{id}/view', name: 'increment_view', methods: ['PATCH'], requirements: ['id' => '\d+'])]
    public function incrementView(int $id, ArticleRepository $repo, EntityManagerInterface $em): JsonResponse
    {
        $article = $repo->find($id);

        if (!$article) {
            return $this->json_response(
                null,
                false,
                "Article #$id introuvable.",
                Response::HTTP_NOT_FOUND
            );
        }

        $article->setNombreVues($article->getNombreVues() + 1);
        $em->flush();

        return $this->json_response([
            'id'          => $article->getIdArticle(),
            'nombre_vues' => $article->getNombreVues(),
        ], true, 'Vue enregistrée.');
    }
}
