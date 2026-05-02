<?php

namespace App\Service;

use App\Entity\Reservation;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Session-based in-app notifications (no DB persistence).
 * Notifications live for the duration of the user's session.
 */
class NotificationService
{
    private const SESSION_KEY = 'app_notifications';
    private const MAX = 20;

    public function __construct(private RequestStack $requestStack) {}

    // ── Creation ─────────────────────────────────────────────────────────────

    public function createReservationNotification(User $user, Reservation $reservation): array
    {
        $coachName = $reservation->getCoach()?->getFullName() ?? 'Votre coach';
        $date      = $reservation->getDateSeance()?->format('d/m/Y') ?? '?';

        return $this->createNotification(
            $user,
            sprintf('Votre réservation avec %s pour le %s a bien été confirmée.', $coachName, $date),
            'reservation'
        );
    }

    public function createCancellationNotification(User $user, Reservation $reservation): array
    {
        $coachName = $reservation->getCoach()?->getFullName() ?? 'votre coach';
        $date      = $reservation->getDateSeance()?->format('d/m/Y') ?? '?';

        return $this->createNotification(
            $user,
            sprintf('Votre réservation avec %s pour le %s a été annulée.', $coachName, $date),
            'annulation'
        );
    }

    public function createNotification(User $user, string $message, string $type = 'info'): array
    {
        $session = $this->requestStack->getSession();
        $notifs  = $session->get(self::SESSION_KEY, []);

        $entry = [
            'id'        => uniqid('n', true),
            'message'   => $message,
            'type'      => $type,
            'isRead'    => false,
            'createdAt' => (new \DateTime())->format('Y-m-d H:i:s'),
            'timeAgo'   => 'À l\'instant',
        ];

        array_unshift($notifs, $entry);
        $session->set(self::SESSION_KEY, array_slice($notifs, 0, self::MAX));

        return $entry;
    }

    // ── Read ─────────────────────────────────────────────────────────────────

    public function getRecentNotifications(User $user, int $limit = 20): array
    {
        $session = $this->requestStack->getSession();
        $notifs  = $session->get(self::SESSION_KEY, []);

        foreach ($notifs as &$n) {
            $n['timeAgo'] = $this->timeAgo($n['createdAt']);
        }
        unset($n);

        return array_slice($notifs, 0, $limit);
    }

    public function getUnreadCount(User $user): int
    {
        $session = $this->requestStack->getSession();
        $notifs  = $session->get(self::SESSION_KEY, []);
        return count(array_filter($notifs, static fn($n) => !$n['isRead']));
    }

    // ── Mark as read ─────────────────────────────────────────────────────────

    public function markAsRead(string $id): void
    {
        $session = $this->requestStack->getSession();
        $notifs  = $session->get(self::SESSION_KEY, []);

        foreach ($notifs as &$n) {
            if ($n['id'] === $id) { $n['isRead'] = true; break; }
        }
        unset($n);

        $session->set(self::SESSION_KEY, $notifs);
    }

    public function markAllAsRead(User $user): int
    {
        $session = $this->requestStack->getSession();
        $notifs  = $session->get(self::SESSION_KEY, []);
        $count   = 0;

        foreach ($notifs as &$n) {
            if (!$n['isRead']) { $n['isRead'] = true; $count++; }
        }
        unset($n);

        $session->set(self::SESSION_KEY, $notifs);
        return $count;
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    private function timeAgo(string $createdAt): string
    {
        try {
            $diff = (new \DateTime())->getTimestamp() - (new \DateTime($createdAt))->getTimestamp();
        } catch (\Exception) {
            return '';
        }
        if ($diff < 60)    return 'À l\'instant';
        if ($diff < 3600)  return (int)($diff / 60) . ' min';
        if ($diff < 86400) return (int)($diff / 3600) . 'h';
        return (new \DateTime($createdAt))->format('d/m/Y');
    }
}

