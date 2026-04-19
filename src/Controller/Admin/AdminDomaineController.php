<?php

namespace App\Controller\Admin;

use App\Entity\DomaineCoaching;
use App\Form\DomaineCoachingType;
use App\Repository\DomaineCoachingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        $q = $request->query->get('q', '');
        $domaines = $repo->search($q);
        $coachCounts = $repo->countCoachesPerDomain();

        return $this->render('admin/domaine/index.html.twig', [
            'domaines'     => $domaines,
            'coachCounts'  => $coachCounts,
            'q'            => $q,
            'total'        => count($repo->findAll()),
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

    // EXPORT CSV
    #[Route('/export-csv', name: 'export_csv', methods: ['GET'])]
    public function exportCsv(DomaineCoachingRepository $repo): StreamedResponse
    {
        $domaines = $repo->findAllOrdered();
        $coachCounts = $repo->countCoachesPerDomain();
        $fileName = 'domaines_export_' . (new \DateTime())->format('Y-m-d_H-i') . '.csv';

        $response = new StreamedResponse(function () use ($domaines, $coachCounts) {
            $h = fopen('php://output', 'w');
            fwrite($h, "\xEF\xBB\xBF"); // BOM for Excel
            fputcsv($h, ['Nom', 'Description', 'Niveau', 'Durée (h)', 'Nb Coaches'], ';');
            foreach ($domaines as $d) {
                fputcsv($h, [
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
