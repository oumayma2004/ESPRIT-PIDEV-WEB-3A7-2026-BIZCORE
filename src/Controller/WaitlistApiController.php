<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Service\WaitlistService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/events/{id}/waitlist')]
class WaitlistApiController extends AbstractController
{
    public function __construct(private WaitlistService $waitlistService) {}

    #[Route('/join', methods: ['POST'])]
    public function join(Evenement $evenement): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->json(['error' => 'Non authentifié'], 401);
        }

        if (!$this->waitlistService->isComplet($evenement)) {
            return $this->json(['error' => 'Places disponibles, pas de waitlist'], 422);
        }

        $inscription = $this->waitlistService->addToWaitlist($evenement, $user);
        $position = $this->waitlistService->getWaitlistPosition($evenement, $user);

        return $this->json([
            'status' => 'waitlist',
            'position' => $position,
            'message' => "Vous êtes #$position en liste d'attente"
        ]);
    }

    #[Route('/status', methods: ['GET'])]
    public function status(Evenement $evenement): JsonResponse
    {
        return $this->json([
            'complet' => $this->waitlistService->isComplet($evenement),
            'places_disponibles' => $this->waitlistService->getPlacesDisponibles($evenement)
        ]);
    }
}