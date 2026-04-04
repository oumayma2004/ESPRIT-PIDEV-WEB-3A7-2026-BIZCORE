<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Disponibilite;
use App\Entity\Reservation;
use App\Repository\CoachRepository;
use App\Repository\DisponibiliteRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Psr\Log\LoggerInterface;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private ReservationRepository $reservationRepo,
        private DisponibiliteRepository $disponibiliteRepo,
        private CoachRepository $coachRepo,
        private LoggerInterface $logger,
    ) {}

    /**
     * Get coach availability for a specific week (7 DAYS: Mon-Sun)
     */
    #[Route('/api/coach/{id}/availability', name: 'api_coach_availability', methods: ['GET'])]
    public function getCoachAvailability(Coach $coach, Request $request): JsonResponse
    {
        $weekStart = $request->query->get('weekStart');

        if (!$weekStart) {
            // Default to current week (handle Sunday correctly)
            $startDate = new \DateTime();
            $dayOfWeek = (int) $startDate->format('N'); // 1=Mon, 7=Sun
            if ($dayOfWeek !== 1) {
                $startDate->modify('last monday');
            }
            $startDate->setTime(0, 0, 0);
        } else {
            try {
                $startDate = new \DateTime($weekStart);
                $startDate->setTime(0, 0, 0);
            } catch (\Exception $e) {
                return $this->json([
                    'success' => false,
                    'message' => 'Format de date invalide pour weekStart'
                ], 400);
            }
        }

        // Get 7 DAYS (Mon-Sun) starting from startDate
        $availability = [];
        for ($i = 0; $i < 7; $i++) {
            $currentDate = (clone $startDate)->modify("+$i days");

            // Check if there's a specific availability entry for this date
            $dispo = $this->disponibiliteRepo->findOneBy([
                'coach' => $coach,
                'jour' => $currentDate
            ]);

            // Check if there's already a reservation for this date
            $reservation = $this->reservationRepo->findOneBy([
                'coach' => $coach,
                'dateSeance' => $currentDate,
                'statut' => 'CONFIRMEE'
            ]);

            $isMyReservation = false;
            if ($reservation && $this->getUser()) {
                $isMyReservation = ($reservation->getUser() === $this->getUser());
            }

            $availability[] = [
                'date' => $currentDate->format('Y-m-d'),
                'dayName' => $this->getFrenchDayName($currentDate->format('N')),
                'dayNumber' => $currentDate->format('d'),
                'month' => $currentDate->format('m'),
                'year' => $currentDate->format('Y'),
                'isAvailable' => $dispo ? $dispo->isDisponible() : ($coach->getDisponibilite() === 'Disponible'),
                'isReserved' => $reservation !== null,
                'isMyReservation' => $isMyReservation,
                'reservationId' => $reservation?->getId(),
            ];
        }

        return $this->json([
            'success' => true,
            'coach' => [
                'id' => $coach->getId(),
                'name' => $coach->getFullName(),
                'domain' => $coach->getDomaine(),
                'disponibilite' => $coach->getDisponibilite(),
            ],
            'weekStart' => $startDate->format('Y-m-d'),
            'weekEnd' => (clone $startDate)->modify('+6 days')->format('Y-m-d'),
            'availability' => $availability,
        ]);
    }

    /**
     * Create a new reservation
     */
    #[Route('/api/reserve', name: 'api_create_reservation', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createReservation(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            if ($data === null) {
                return $this->json([
                    'success' => false,
                    'message' => 'JSON invalide'
                ], 400);
            }

            $coachId = $data['coachId'] ?? null;
            $dateSeance = $data['dateSeance'] ?? null;

            // Validation: required fields
            if (!$coachId || !$dateSeance) {
                return $this->json([
                    'success' => false,
                    'message' => 'Coach et date requis'
                ], 400);
            }

            // Validation: user must be logged in
            if (!$this->getUser()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Vous devez être connecté pour réserver'
                ], 401);
            }

            // Validation: coach exists
            $coach = $this->coachRepo->find($coachId);
            if (!$coach) {
                return $this->json([
                    'success' => false,
                    'message' => 'Coach introuvable'
                ], 404);
            }

            // Validation: coach is available
            if ($coach->getDisponibilite() !== 'Disponible') {
                return $this->json([
                    'success' => false,
                    'message' => 'Ce coach est actuellement indisponible'
                ], 400);
            }

            // Validation: parse date correctly
            try {
                $seanceDate = new \DateTime($dateSeance);
                $seanceDate->setTime(0, 0, 0);
            } catch (\Exception $e) {
                return $this->json([
                    'success' => false,
                    'message' => 'Format de date invalide. Utilisez YYYY-MM-DD'
                ], 400);
            }

            // Validation: date is in the future
            $today = new \DateTime('today');
            if ($seanceDate < $today) {
                return $this->json([
                    'success' => false,
                    'message' => 'La date de séance doit être dans le futur'
                ], 400);
            }

            // Validation: date is not too far in the future (max 12 months)
            $maxDate = (new \DateTime())->modify('+12 months');
            if ($seanceDate > $maxDate) {
                return $this->json([
                    'success' => false,
                    'message' => 'La séance doit être prévue dans les 12 prochains mois'
                ], 400);
            }

            // Validation: no existing confirmed reservation for this coach and date
            $existingReservation = $this->reservationRepo->findOneBy([
                'coach' => $coach,
                'dateSeance' => $seanceDate,
                'statut' => 'CONFIRMEE'
            ]);

            if ($existingReservation) {
                return $this->json([
                    'success' => false,
                    'message' => 'Cette séance est déjà réservée'
                ], 400);
            }

            // Validation: specific day availability (if defined)
            $dispo = $this->disponibiliteRepo->findOneBy([
                'coach' => $coach,
                'jour' => $seanceDate
            ]);

            if ($dispo && !$dispo->isDisponible()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Le coach n\'est pas disponible ce jour-là'
                ], 400);
            }

            // Create reservation
            $reservation = new Reservation();
            $reservation->setCoach($coach);
            $reservation->setUser($this->getUser());
            $reservation->setDateSeance($seanceDate);
            $reservation->setStatut('CONFIRMEE');
            $reservation->setDateReservation(new \DateTime());

            $this->em->persist($reservation);
            $this->em->flush();

            return $this->json([
                'success' => true,
                'message' => 'Réservation confirmée avec succès !',
                'reservation' => [
                    'id' => $reservation->getId(),
                    'dateSeance' => $reservation->getDateSeance()->format('Y-m-d'),
                    'coach' => $coach->getFullName(),
                ]
            ]);

        } catch (ORMException $e) {
            $this->logger->error('Doctrine ORM Error during reservation:', [
                'error' => $e->getMessage(),
                'coachId' => $coachId ?? null,
                'dateSeance' => $dateSeance ?? null,
                'trace' => $e->getTraceAsString(),
            ]);
            
            return $this->json([
                'success' => false,
                'message' => 'Erreur de base de données: ' . $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            $this->logger->error('Unexpected error during reservation:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            return $this->json([
                'success' => false,
                'message' => 'Erreur serveur: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Cancel a reservation
     */
    #[Route('/api/cancel/{id}', name: 'api_cancel_reservation', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function cancelReservation(Reservation $reservation): JsonResponse
    {
        try {
            // Check authentication
            if (!$this->getUser()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Non authentifié'
                ], 401);
            }
            // Check if user owns this reservation
            if ($reservation->getUser() !== $this->getUser()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Non autorisé'
                ], 403);
            }

            $reservation->setStatut('ANNULEE');
            $this->em->flush();

            return $this->json([
                'success' => true,
                'message' => 'Réservation annulée avec succès'
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Error canceling reservation:', ['error' => $e->getMessage()]);
            
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de l\'annulation'
            ], 500);
        }
    }

    /**
     * Set availability for a coach on a specific date
     */
    #[Route('/api/coach/{id}/availability', name: 'api_coach_set_availability', methods: ['POST'])]
    public function setAvailability(Coach $coach, Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            $jour = $data['date'] ?? null;
            $statut = $data['statut'] ?? 'Disponible';

            if (!$jour) {
                return $this->json(['success' => false, 'message' => 'Date requise'], 400);
            }

            $dateJour = new \DateTime($jour);

            // Check if availability entry exists
            $dispo = $this->disponibiliteRepo->findOneBy([
                'coach' => $coach,
                'jour' => $dateJour
            ]);

            if (!$dispo) {
                $dispo = new Disponibilite();
                $dispo->setCoach($coach);
                $dispo->setJour($dateJour);
            }

            $dispo->setStatut($statut);

            $this->em->persist($dispo);
            $this->em->flush();

            return $this->json([
                'success' => true,
                'message' => 'Disponibilité mise à jour',
                'disponibilite' => [
                    'date' => $dispo->getJour()->format('Y-m-d'),
                    'statut' => $dispo->getStatut()
                ]
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Error setting availability:', ['error' => $e->getMessage()]);
            
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la mise à jour'
            ], 500);
        }
    }

    /**
     * Get all reservations for a coach
     */
    #[Route('/api/coach/{id}/reservations', name: 'api_coach_reservations', methods: ['GET'])]
    public function getCoachReservations(Coach $coach): JsonResponse
    {
        try {
            $reservations = $this->reservationRepo->findBy(
                ['coach' => $coach, 'statut' => 'CONFIRMEE'],
                ['dateSeance' => 'ASC']
            );

            $result = array_map(function(Reservation $r) {
                return [
                    'id' => $r->getId(),
                    'dateSeance' => $r->getDateSeance()->format('Y-m-d'),
                    'dateReservation' => $r->getDateReservation()->format('Y-m-d H:i'),
                    'statut' => $r->getStatut(),
                    'userName' => $r->getUser()?->getFullName() ?? 'Anonyme'
                ];
            }, $reservations);

            return $this->json([
                'success' => true,
                'reservations' => $result
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Error fetching reservations:', ['error' => $e->getMessage()]);
            
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la récupération des réservations'
            ], 500);
        }
    }

    /**
     * Get French day name from ISO-8601 day number (1=Mon, 7=Sun)
     */
    private function getFrenchDayName(string $dayNumber): string
    {
        return match ((int)$dayNumber) {
            1 => 'Lundi',
            2 => 'Mardi',
            3 => 'Mercredi',
            4 => 'Jeudi',
            5 => 'Vendredi',
            6 => 'Samedi',
            7 => 'Dimanche',
            default => 'Jour inconnu'
        };
    }
}
