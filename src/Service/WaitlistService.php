<?php

namespace App\Service;

use App\Entity\Evenement;
use App\Entity\InscriptionEvenement;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class WaitlistService
{
    public function __construct(
        private EntityManagerInterface $em,
        private ?MailerInterface $mailer = null
    ) {}

    public function isComplet(Evenement $ev): bool
    {
        $count = $this->em->createQuery(
            'SELECT COALESCE(SUM(i.nombrePlaces), 0)
             FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'confirme')
        ->getSingleScalarResult();

        return (int)$count >= $ev->getCapacity();
    }

    public function getPlacesDisponibles(Evenement $ev): int
    {
        $count = $this->em->createQuery(
            'SELECT COALESCE(SUM(i.nombrePlaces), 0)
             FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'confirme')
        ->getSingleScalarResult();

        return max(0, $ev->getCapacity() - (int)$count);
    }

    public function addToWaitlist(Evenement $ev, ?User $user, int $places = 1, string $nom = '', string $email = '', string $tel = ''): InscriptionEvenement
    {
        $inscription = new InscriptionEvenement();
        $inscription->setEvenement($ev);
        $inscription->setNombrePlaces($places);
        $inscription->setStatut('waitlist');
        $inscription->setDateReservation(new \DateTime());

        if ($user) {
            $inscription->setUser($user);
            $inscription->setNom($user->getFullName());
            $inscription->setEmail($user->getEmail());
        } else {
            $inscription->setNom($nom);
            $inscription->setEmail($email);
            $inscription->setTelephone($tel);
        }

        $this->em->persist($inscription);
        $this->em->flush();

        // Send confirmation email
        $this->sendWaitlistConfirmationEmail($inscription, $ev);

        return $inscription;
    }

    public function getWaitlistPosition(Evenement $ev, InscriptionEvenement $inscription): int
    {
        $list = $this->em->createQuery(
            'SELECT i FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status
             ORDER BY i.dateReservation ASC'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'waitlist')
        ->getResult();

        foreach ($list as $index => $item) {
            if ($item->getId() === $inscription->getId()) {
                return $index + 1;
            }
        }
        return -1;
    }

    public function getWaitlist(Evenement $ev): array
    {
        return $this->em->createQuery(
            'SELECT i FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status
             ORDER BY i.dateReservation ASC'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'waitlist')
        ->getResult();
    }

    public function getWaitlistCount(Evenement $ev): int
    {
        return (int) $this->em->createQuery(
            'SELECT COUNT(i.id) FROM App\Entity\InscriptionEvenement i
             WHERE i.evenement = :ev AND i.statut = :status'
        )
        ->setParameter('ev', $ev)
        ->setParameter('status', 'waitlist')
        ->getSingleScalarResult();
    }

    /**
     * Called when a reservation is cancelled — auto-promotes next in waitlist
     */
    public function promoteFromWaitlist(Evenement $ev): ?InscriptionEvenement
    {
        $waitlist = $this->getWaitlist($ev);

        if (empty($waitlist)) {
            return null;
        }

        $next = $waitlist[0];
        $placesDisponibles = $this->getPlacesDisponibles($ev);

        if ($placesDisponibles >= $next->getNombrePlaces()) {
            $next->setStatut('confirme');
            $this->em->flush();

            // Notify the promoted person
            $this->sendPromotionEmail($next, $ev);

            return $next;
        }

        return null;
    }

    private function sendWaitlistConfirmationEmail(InscriptionEvenement $i, Evenement $ev): void
    {
        if (!$this->mailer || !$i->getEmail()) return;

        try {
            $email = (new Email())
                ->from('no-reply@bizcore.com')
                ->to($i->getEmail())
                ->subject("⏳ Liste d'attente — {$ev->getTitle()}")
                ->html("
                    <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;'>
                        <h2 style='color:#0f172a;'>⏳ Vous êtes sur la liste d'attente</h2>
                        <p>Bonjour <strong>{$i->getNom()}</strong>,</p>
                        <p>Vous avez été ajouté(e) à la liste d'attente pour l'événement :</p>
                        <div style='background:#f8fafc;border-radius:8px;padding:16px;margin:16px 0;border-left:4px solid #f59e0b;'>
                            <strong style='font-size:18px;color:#0f172a;'>{$ev->getTitle()}</strong><br>
                            📅 {$ev->getDate()->format('d/m/Y à H:i')}<br>
                            📍 {$ev->getLieu()}
                        </div>
                        <p>Nous vous contacterons automatiquement si une place se libère.</p>
                        <p style='color:#64748b;font-size:13px;'>— L'équipe Bizcore</p>
                    </div>
                ");

            $this->mailer->send($email);
        } catch (\Exception $e) {
            // Silently fail — don't block the waitlist process
        }
    }

    private function sendPromotionEmail(InscriptionEvenement $i, Evenement $ev): void
    {
        if (!$this->mailer || !$i->getEmail()) return;

        try {
            $email = (new Email())
                ->from('no-reply@bizcore.com')
                ->to($i->getEmail())
                ->subject("🎉 Place disponible — {$ev->getTitle()}")
                ->html("
                    <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;'>
                        <h2 style='color:#16a34a;'>🎉 Bonne nouvelle ! Une place est disponible</h2>
                        <p>Bonjour <strong>{$i->getNom()}</strong>,</p>
                        <p>Une place s'est libérée pour l'événement :</p>
                        <div style='background:#f0fdf4;border-radius:8px;padding:16px;margin:16px 0;border-left:4px solid #22c55e;'>
                            <strong style='font-size:18px;color:#0f172a;'>{$ev->getTitle()}</strong><br>
                            📅 {$ev->getDate()->format('d/m/Y à H:i')}<br>
                            📍 {$ev->getLieu()}
                        </div>
                        <p>✅ Votre réservation a été <strong>confirmée automatiquement</strong> !</p>
                        <p style='color:#64748b;font-size:13px;'>— L'équipe Bizcore</p>
                    </div>
                ");

            $this->mailer->send($email);
        } catch (\Exception $e) {
            // Silently fail
        }
    }
}