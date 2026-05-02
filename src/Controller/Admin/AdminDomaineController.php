<?php

namespace App\Controller\Admin;

use App\Entity\DomaineCoaching;
use App\Form\DomaineCoachingType;
use App\Repository\DomaineCoachingRepository;
use App\Service\DomaineSuggestionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/domaine', name: 'admin_domaine_')]
#[IsGranted('ROLE_ADMIN')]
class AdminDomaineController extends AbstractController
{
    // LIST
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(Request $request, DomaineCoachingRepository $repo): Response
    {
        $q      = $request->query->get('q', '');
        $niveau = $request->query->get('niveau', '');
        $sort   = $request->query->get('sort', 'nom');
        $dir    = $request->query->get('dir', 'asc');

        $domaines    = $repo->searchWithFilters($q, $niveau, $sort, $dir);
        $coachCounts = $repo->countCoachesPerDomain();
        $stats       = $repo->getStats();

        return $this->render('admin/domaine/index.html.twig', [
            'domaines'    => $domaines,
            'coachCounts' => $coachCounts,
            'stats'       => $stats,
            'q'           => $q,
            'niveau'      => $niveau,
            'sort'        => $sort,
            'dir'         => $dir,
            'total'       => count($repo->findAll()),
        ]);
    }

    // CREATE
    #[Route('/nouveau', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $domaine = new DomaineCoaching();
        $form = $this->createForm(DomaineCoachingType::class, $domaine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($domaine);
            $em->flush();
            $this->addFlash('success', 'Domaine « ' . $domaine->getNomDomaine() . ' » ajouté avec succès.');
            return $this->redirectToRoute('admin_domaine_index');
        }

        return $this->render('admin/domaine/new.html.twig', [
            'form'    => $form,
            'domaine' => $domaine,
        ]);
    }

    // "QUOI DE NEUF ?" — AI-powered domain trend discovery (SerpAPI + Gemini)
    #[Route('/whats-new', name: 'whats_new', methods: ['GET'])]
    public function whatsNew(DomaineSuggestionService $service): JsonResponse
    {
        try {
            $result = $service->discover();
            return $this->json([
                'ok' => true,
                'suggestions' => $result['suggestions'],
                'source' => $result['source'],
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'ok' => false,
                'error' => 'Impossible de récupérer les tendances pour le moment.',
                'detail' => $e->getMessage(),
            ], 500);
        }
    }

    // Add an AI-suggested domain in one click
    #[Route('/whats-new/add', name: 'whats_new_add', methods: ['POST'])]
    public function whatsNewAdd(Request $request, EntityManagerInterface $em, DomaineCoachingRepository $repo): JsonResponse
    {
        $token = (string) $request->request->get('_token', '');
        if (!$this->isCsrfTokenValid('whats_new_add', $token)) {
            return $this->json(['ok' => false, 'error' => 'Token CSRF invalide.'], 403);
        }

        $nom = trim((string) $request->request->get('nom', ''));
        $description = trim((string) $request->request->get('description', ''));

        if ($nom === '' || mb_strlen($nom) < 2 || mb_strlen($nom) > 100) {
            return $this->json(['ok' => false, 'error' => 'Nom invalide (2 à 100 caractères).'], 422);
        }
        if (mb_strlen($description) < 10) {
            return $this->json(['ok' => false, 'error' => 'Description trop courte (min. 10 caractères).'], 422);
        }

        // Duplicate check (case-insensitive)
        foreach ($repo->findAll() as $d) {
            if (mb_strtolower($d->getNomDomaine()) === mb_strtolower($nom)) {
                return $this->json(['ok' => false, 'error' => 'Ce domaine existe déjà.'], 409);
            }
        }

        $domaine = new DomaineCoaching();
        $domaine->setNomDomaine($nom);
        $domaine->setDescription($description);
        // Keep safe defaults — admin completes later from the edit page.
        $domaine->setNiveauDifficulte('Débutant');

        $em->persist($domaine);
        $em->flush();

        return $this->json([
            'ok' => true,
            'id' => $domaine->getIdDomaine(),
            'nom' => $domaine->getNomDomaine(),
            'editUrl' => $this->generateUrl('admin_domaine_edit', ['id' => $domaine->getIdDomaine()]),
        ]);
    }

    // READ
    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(DomaineCoaching $domaine, EntityManagerInterface $em): Response
    {
        // Get coaches belonging to this domain
        $coaches = $em->getConnection()->fetchAllAssociative(
            'SELECT id_coach, nom, prenom, disponibilite, tarif_horaire, experience_annees, note_moyenne
             FROM coach WHERE id_domaine = ? ORDER BY nom',
            [$domaine->getId()]
        );

        return $this->render('admin/domaine/show.html.twig', [
            'domaine' => $domaine,
            'coaches' => $coaches,
        ]);
    }

    // UPDATE
    #[Route('/{id}/modifier', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, DomaineCoaching $domaine, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(DomaineCoachingType::class, $domaine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Domaine « ' . $domaine->getNomDomaine() . ' » modifié avec succès.');
            return $this->redirectToRoute('admin_domaine_index');
        }

        return $this->render('admin/domaine/edit.html.twig', [
            'form'    => $form,
            'domaine' => $domaine,
        ]);
    }

    // DELETE (cascade deletes coaches via FK)
    #[Route('/{id}/supprimer', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, DomaineCoaching $domaine, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $domaine->getId(), $request->getPayload()->getString('_token'))) {
            $name = $domaine->getNomDomaine();

            // Clean up child tables of coaches in this domain before CASCADE removes them
            $conn = $em->getConnection();
            $coachIds = $conn->fetchFirstColumn('SELECT id_coach FROM coach WHERE id_domaine = ?', [$domaine->getId()]);
            if ($coachIds) {
                $placeholders = implode(',', array_fill(0, count($coachIds), '?'));
                $conn->executeStatement("DELETE FROM reservation WHERE id_coach IN ($placeholders)", $coachIds);
                $conn->executeStatement("DELETE FROM rating WHERE id_coach IN ($placeholders)", $coachIds);
                $conn->executeStatement("DELETE FROM disponibilite WHERE id_coach IN ($placeholders)", $coachIds);
            }

            $em->remove($domaine);
            $em->flush();
            $this->addFlash('success', 'Domaine « ' . $name . ' » et ses coaches associés supprimés.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('admin_domaine_index');
    }

    // STATISTICS
    #[Route('/statistiques', name: 'stats', methods: ['GET'])]
    public function stats(DomaineCoachingRepository $repo): Response
    {
        return $this->render('admin/domaine/stats.html.twig', [
            'stats' => $repo->getStats(),
        ]);
    }

    // EXPORT CSV
    #[Route('/export-csv', name: 'export_csv', methods: ['GET'])]
    public function exportCsv(DomaineCoachingRepository $repo): StreamedResponse
    {
        $domaines    = $repo->findAllOrdered();
        $coachCounts = $repo->countCoachesPerDomain();
        $fileName    = 'domaines_export_' . (new \DateTime())->format('Y-m-d_H-i') . '.csv';

        $response = new StreamedResponse(function () use ($domaines, $coachCounts) {
            $h = fopen('php://output', 'w');
            fwrite($h, "\xEF\xBB\xBF"); // BOM for Excel
            fputcsv($h, ['ID', 'Nom', 'Description', 'Niveau', 'Durée formation (h)', 'Nb Coaches'], ';');
            foreach ($domaines as $d) {
                fputcsv($h, [
                    $d->getIdDomaine(),
                    $d->getNomDomaine(),
                    $d->getDescription() ?? '',
                    $d->getNiveauDifficulte(),
                    $d->getDureeFormationHeures() ?? '',
                    $coachCounts[$d->getId()] ?? 0,
                ], ';');
            }
            fclose($h);
        });

        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $fileName . '"');

        return $response;
    }
}
