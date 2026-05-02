<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Disponibilite;
use App\Entity\Reservation;
use App\Repository\DisponibiliteRepository;
use App\Repository\ReservationRepository;
use App\Service\NotificationService;
use App\Service\ReservationService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private ReservationRepository $reservationRepo,
        private DisponibiliteRepository $disponibiliteRepo,
        private ReservationService $reservationService,
        private NotificationService $notificationService,
        private LoggerInterface $logger,
    ) {}

    // ──────────────────────────────────────────────────────────────────────────
    // AVAILABILITY
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * Get coach availability for a specific week (7 DAYS: Mon–Sun)
     */
    #[Route('/api/coach/{id}/availability', name: 'api_coach_availability', methods: ['GET'])]
    public function getCoachAvailability(Coach $coach, Request $request): JsonResponse
    {
        $weekStart = $request->query->get('weekStart');

        if (!$weekStart) {
            $startDate = new \DateTime();
            $dayOfWeek = (int) $startDate->format('N');
            if ($dayOfWeek !== 1) {
                $startDate->modify('last monday');
            }
            $startDate->setTime(0, 0, 0);
        } else {
            try {
                $startDate = new \DateTime((string) $weekStart);
                $startDate->setTime(0, 0, 0);
            } catch (\Exception) {
                return $this->json(['success' => false, 'message' => 'Format de date invalide pour weekStart'], 400);
            }
        }

        $availability = [];
        for ($i = 0; $i < 7; $i++) {
            $currentDate = (clone $startDate)->modify("+$i days");

            $dispo = $this->disponibiliteRepo->findOneBy([
                'coach' => $coach,
                'jour'  => $currentDate,
            ]);

            $reservation = $this->reservationRepo->findOneBy([
                'coach'      => $coach,
                'dateSeance' => $currentDate,
                'statut'     => 'CONFIRMEE',
            ]);

            $isMyReservation = false;
            if ($reservation && $this->getUser()) {
                $isMyReservation = ($reservation->getUser() === $this->getUser());
            }

            $availability[] = [
                'date'            => $currentDate->format('Y-m-d'),
                'dayName'         => $this->getFrenchDayName($currentDate->format('N')),
                'dayNumber'       => $currentDate->format('d'),
                'month'           => $currentDate->format('m'),
                'year'            => $currentDate->format('Y'),
                'isAvailable'     => $dispo ? $dispo->isDisponible() : ($coach->getDisponibilite() === 'Disponible'),
                'isReserved'      => $reservation !== null,
                'isMyReservation' => $isMyReservation,
                'reservationId'   => $reservation?->getId(),
            ];
        }

        return $this->json([
            'success'      => true,
            'coach'        => [
                'id'           => $coach->getId(),
                'name'         => $coach->getFullName(),
                'domain'       => $coach->getDomaine(),
                'disponibilite' => $coach->getDisponibilite(),
            ],
            'weekStart'    => $startDate->format('Y-m-d'),
            'weekEnd'      => (clone $startDate)->modify('+6 days')->format('Y-m-d'),
            'availability' => $availability,
        ]);
    }

    // ──────────────────────────────────────────────────────────────────────────
    // RESERVATION CREATION — now delegates to ReservationService
    // ──────────────────────────────────────────────────────────────────────────

    #[Route('/api/reserve', name: 'api_create_reservation', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function createReservation(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if ($data === null) {
            return $this->json(['success' => false, 'message' => 'JSON invalide'], 400);
        }

        $coachId    = $data['coachId'] ?? null;
        $dateSeance = $data['dateSeance'] ?? null;

        if (!$coachId || !$dateSeance) {
            return $this->json(['success' => false, 'message' => 'Coach et date requis'], 400);
        }

        /** @var \App\Entity\User $user */
        $user   = $this->getUser();
        $result = $this->reservationService->create($user, (int) $coachId, $dateSeance);

        $statusCode = $result['success'] ? 200 : 400;

        return $this->json($result, $statusCode);
    }

    // ──────────────────────────────────────────────────────────────────────────
    // CANCEL RESERVATION
    // ──────────────────────────────────────────────────────────────────────────

    #[Route('/api/cancel/{id}', name: 'api_cancel_reservation', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function cancelReservation(Reservation $reservation): JsonResponse
    {
        try {
            if (!$this->getUser()) {
                return $this->json(['success' => false, 'message' => 'Non authentifié'], 401);
            }
            if ($reservation->getUser() !== $this->getUser()) {
                return $this->json(['success' => false, 'message' => 'Non autorisé'], 403);
            }

            $reservation->setStatut('ANNULEE');
            $this->em->flush();

            // In-app notification for cancellation
            /** @var \App\Entity\User $user */
            $user = $this->getUser();
            $this->notificationService->createCancellationNotification($user, $reservation);
            $unreadCount = $this->notificationService->getUnreadCount($user);

            return $this->json([
                'success'      => true,
                'message'      => 'Réservation annulée avec succès',
                'notification' => ['unreadCount' => $unreadCount],
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Error canceling reservation:', ['error' => $e->getMessage()]);
            return $this->json(['success' => false, 'message' => 'Erreur lors de l\'annulation'], 500);
        }
    }

    // ──────────────────────────────────────────────────────────────────────────
    // SET AVAILABILITY (admin / coach)
    // ──────────────────────────────────────────────────────────────────────────

    #[Route('/api/coach/{id}/availability', name: 'api_coach_set_availability', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function setAvailability(Coach $coach, Request $request): JsonResponse
    {
        try {
            $data  = json_decode($request->getContent(), true);
            $jour  = $data['date'] ?? null;
            $statut = $data['statut'] ?? 'Disponible';

            if (!$jour) {
                return $this->json(['success' => false, 'message' => 'Date requise'], 400);
            }

            $dateJour = new \DateTime($jour);

            $dispo = $this->disponibiliteRepo->findOneBy(['coach' => $coach, 'jour' => $dateJour]);
            if (!$dispo) {
                $dispo = new Disponibilite();
                $dispo->setCoach($coach);
                $dispo->setJour($dateJour);
            }

            $dispo->setStatut($statut);
            $this->em->persist($dispo);
            $this->em->flush();

            return $this->json([
                'success'       => true,
                'message'       => 'Disponibilité mise à jour',
                'disponibilite' => [
                    'date'   => $dispo->getJour()?->format('Y-m-d') ?? '',
                    'statut' => $dispo->getStatut(),
                ],
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Error setting availability:', ['error' => $e->getMessage()]);
            return $this->json(['success' => false, 'message' => 'Erreur lors de la mise à jour'], 500);
        }
    }

    // ──────────────────────────────────────────────────────────────────────────
    // COACH RESERVATIONS (read-only list)
    // ──────────────────────────────────────────────────────────────────────────

    #[Route('/api/coach/{id}/reservations', name: 'api_coach_reservations', methods: ['GET'])]
    public function getCoachReservations(Coach $coach): JsonResponse
    {
        try {
            $reservations = $this->reservationRepo->findBy(
                ['coach' => $coach, 'statut' => 'CONFIRMEE'],
                ['dateSeance' => 'ASC']
            );

            $result = array_map(static function (Reservation $r): array {
                return [
                    'id'              => $r->getId(),
                    'dateSeance'      => $r->getDateSeance() !== null ? $r->getDateSeance()->format('Y-m-d') : '',
                    'dateReservation' => $r->getDateReservation() !== null ? $r->getDateReservation()->format('Y-m-d H:i') : '',
                    'statut'          => $r->getStatut(),
                    'userName'        => $r->getUser()?->getFullName() ?? 'Anonyme',
                ];
            }, $reservations);

            return $this->json(['success' => true, 'reservations' => $result]);
        } catch (\Exception $e) {
            $this->logger->error('Error fetching reservations:', ['error' => $e->getMessage()]);
            return $this->json(['success' => false, 'message' => 'Erreur lors de la récupération'], 500);
        }
    }

    // ──────────────────────────────────────────────────────────────────────────
    // NOTIFICATION API ROUTES
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * Get recent notifications and unread count for the authenticated user.
     */
    #[Route('/api/notifications', name: 'api_notifications_list', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function getNotifications(): JsonResponse
    {
        /** @var \App\Entity\User $user */
        $user          = $this->getUser();
        $notifications = $this->notificationService->getRecentNotifications($user);
        $unreadCount   = $this->notificationService->getUnreadCount($user);

        return $this->json([
            'success'       => true,
            'unreadCount'   => $unreadCount,
            'notifications' => $notifications,
        ]);
    }

    /**
     * Mark a single notification as read.
     */
    #[Route('/api/notifications/{id}/read', name: 'api_notification_read', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function markNotificationRead(string $id): JsonResponse
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        $this->notificationService->markAsRead($id);
        $unreadCount = $this->notificationService->getUnreadCount($user);

        return $this->json(['success' => true, 'unreadCount' => $unreadCount]);
    }

    /**
     * Mark ALL notifications as read for the authenticated user.
     */
    #[Route('/api/notifications/read-all', name: 'api_notifications_read_all', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function markAllNotificationsRead(): JsonResponse
    {
        /** @var \App\Entity\User $user */
        $user    = $this->getUser();
        $updated = $this->notificationService->markAllAsRead($user);

        return $this->json(['success' => true, 'updated' => $updated, 'unreadCount' => 0]);
    }

    // ──────────────────────────────────────────────────────────────────────────
    // ICS CALENDAR EXPORT
    // ──────────────────────────────────────────────────────────────────────────

    /**
     * Generate and download an ICS file for a confirmed reservation.
     * Compatible with Google Calendar and Outlook.
     */
    #[Route('/{id}/calendar', name: 'reservation_calendar_ics', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function downloadCalendarIcs(Reservation $reservation): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        // Security: only the reservation owner may download
        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à accéder à cette réservation.');
        }

        if ($reservation->getStatut() !== 'CONFIRMEE') {
            throw $this->createNotFoundException('Réservation non confirmée.');
        }

        $coach     = $reservation->getCoach();
        $dateSeance = $reservation->getDateSeance();

        if ($dateSeance === null) {
            throw $this->createNotFoundException('Date de séance manquante.');
        }

        // Default session: 09:00 → 10:00 local time (Africa/Tunis)
        $tz     = new \DateTimeZone('Africa/Tunis');
        $dtStart = \DateTime::createFromInterface($dateSeance)->setTimezone($tz)->setTime(9, 0, 0);
        $dtEnd   = \DateTime::createFromInterface($dateSeance)->setTimezone($tz)->setTime(10, 0, 0);
        $now     = new \DateTime('now', new \DateTimeZone('UTC'));

        $summary     = 'Séance coaching — ' . ($coach?->getPrenom() . ' ' . $coach?->getNom());
        $description = implode('\\n', [
            'Coach : '    . ($coach?->getPrenom() . ' ' . $coach?->getNom()),
            'Domaine : '  . ($coach?->getDomaine() ?? 'N/A'),
            'Tarif : '    . ($coach?->getTarifHoraire() ?? 'N/A') . ' DT/H',
            'Statut : '   . $reservation->getStatut(),
        ]);

        $uid = $reservation->getId() . '-' . md5('bizcore' . $reservation->getId()) . '@bizcore.app';

        $lines = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//Bizcore//Coaching Platform//FR',
            'CALSCALE:GREGORIAN',
            'METHOD:REQUEST',
            'BEGIN:VEVENT',
            'UID:'     . $uid,
            'DTSTAMP:' . $now->format('Ymd\THis\Z'),
            'DTSTART;TZID=Africa/Tunis:' . $dtStart->format('Ymd\THis'),
            'DTEND;TZID=Africa/Tunis:'   . $dtEnd->format('Ymd\THis'),
            'SUMMARY:'     . $this->escapeIcsText($summary),
            'DESCRIPTION:' . $this->escapeIcsText($description),
            'LOCATION:Bizcore Coaching Platform',
            'STATUS:CONFIRMED',
            'TRANSP:OPAQUE',
            'END:VEVENT',
            'END:VCALENDAR',
        ];

        $icsContent = implode("\r\n", $lines) . "\r\n";
        $filename   = 'reservation-coaching-' . $reservation->getId() . '.ics';

        return new Response($icsContent, 200, [
            'Content-Type'        => 'text/calendar; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control'       => 'no-cache, no-store, must-revalidate',
        ]);
    }

    // ──────────────────────────────────────────────────────────────────────────
    // HELPERS
    // ──────────────────────────────────────────────────────────────────────────

    private function escapeIcsText(string $text): string
    {
        // RFC 5545 §3.3.11: escape backslash, semicolon, comma, newline
        return str_replace(
            ['\\', ';', ','],
            ['\\\\', '\;', '\,'],
            $text
        );
    }

    private function getFrenchDayName(string $dayNumber): string
    {
        return match ((int) $dayNumber) {
            1 => 'Lundi',
            2 => 'Mardi',
            3 => 'Mercredi',
            4 => 'Jeudi',
            5 => 'Vendredi',
            6 => 'Samedi',
            7 => 'Dimanche',
            default => 'Jour inconnu',
        };
    }
}
