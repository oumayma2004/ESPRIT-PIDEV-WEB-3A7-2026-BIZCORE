<?php

namespace App\Controller\Admin;

use App\Entity\Coach;
use App\Form\CoachType;
use App\Repository\CoachRepository;
use App\Service\CsvExportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/coach', name: 'admin_coach_')]
class AdminCoachController extends AbstractController
{
    public function __construct(
        private CsvExportService $csvExportService,
    ) {}

    // LIST — équivalent getData() Java
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(Request $request, CoachRepository $repo): Response
    {
        $q       = $request->query->get('q', '');
        $domaine = $request->query->get('domaine', '');
        $dispo   = $request->query->get('dispo', '');

        // Use database-level filtering for performance
        $coaches = $repo->searchWithFilters($q, $domaine, $dispo);

        return $this->render('admin/coach/index.html.twig', [
            'coaches' => $coaches,
            'q'       => $q,
            'domaine' => $domaine,
            'dispo'   => $dispo,
            'total'   => count($repo->findAll()),
        ]);
    }

    // CREATE — équivalent addCoach() Java
    #[Route('/nouveau', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, CoachRepository $repo): Response
    {
        $coach = new Coach();
        $form  = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Duplicate check (same as Java addCoach guard)
            $existing = $repo->findByFullName($coach->getNom(), $coach->getPrenom());
            if ($existing) {
                $this->addFlash('error', 'Un coach avec ce nom et prénom existe déjà.');
            } else {
                $em->persist($coach);
                $em->flush();
                $this->addFlash('success', 'Coach enregistré');
                return $this->redirectToRoute('admin_coach_index');
            }
        }

        return $this->render('admin/coach/new.html.twig', [
            'form'    => $form,
            'coach'   => $coach,
            'coaches' => $repo->findAll(),
        ]);
    }

    // READ — afficher un coach
    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Coach $coach): Response
    {
        return $this->render('admin/coach/show.html.twig', [
            'coach' => $coach,
        ]);
    }

    // UPDATE — équivalent updateCoach() Java
    #[Route('/{id}/modifier', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, Coach $coach, EntityManagerInterface $em, CoachRepository $repo): Response
    {
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Check duplicate (excluding self)
            $existing = $repo->findByFullName($coach->getNom(), $coach->getPrenom(), $coach->getId());
            if ($existing) {
                $this->addFlash('error', 'Un autre coach avec ce nom et prénom existe déjà.');
            } else {
                $em->flush();
                $this->addFlash('success', 'Coach « '.$coach->getFullName().' » modifié avec succès !');
                return $this->redirectToRoute('admin_coach_index');
            }
        }

        return $this->render('admin/coach/edit.html.twig', [
            'coach'   => $coach,
            'form'    => $form,
            'coaches' => $repo->findAll(),
        ]);
    }

    // DELETE — équivalent deleteCoach() Java
    #[Route('/{id}/supprimer', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, Coach $coach, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coach->getId(), $request->getPayload()->getString('_token'))) {
            $name = $coach->getFullName();
            $em->remove($coach);
            $em->flush();
            $this->addFlash('success', 'Coach « '.$name.' » supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide. Suppression annulée.');
        }
        return $this->redirectToRoute('admin_coach_index');
    }

    // EXPORT CSV — via CsvExportService (StreamedResponse)
    #[Route('/export-csv', name: 'export_csv', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function exportCsv(): StreamedResponse
    {
        return $this->csvExportService->exportCoachsCsv();
    }

    // STATISTICS — équivalent afficherStatistiques() Java
    #[Route('/statistiques', name: 'stats', methods: ['GET'])]
    public function statistics(): Response
    {
        return $this->redirectToRoute('admin_statistics_index');
    }
}

