<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;

class MailerService
{
    public function __construct(private MailerInterface $mailer) {}

    public function sendTicket(array $data, string $qrPngString): void
    {
        $email = (new Email())
            ->from('oumaymaboulabiar46@gmail.com')
            ->to($data['email'])
            ->subject('🎟️ Votre E-Billet — ' . $data['event'])
            ->html($this->buildHtml($data, $qrPngString));

        // Also attach as downloadable file
        $email->attach($qrPngString, 'ebillet-qrcode.png', 'image/png');

        $this->mailer->send($email);
    }

    private function buildHtml(array $data, string $qrPngString): string
    {
        // Embed as base64 directly in HTML — works in all email clients
        $qrBase64 = base64_encode($qrPngString);

        return "
        <div style='font-family:Arial;max-width:600px;margin:auto;border:1px solid #eee;border-radius:8px;padding:30px'>
            <h2 style='color:#4F46E5'>🎟️ Votre E-Billet</h2>
            <p>Bonjour <strong>{$data['customer']}</strong>,</p>
            <p>Votre paiement a été confirmé. Voici votre billet :</p>
            <table style='width:100%;border-collapse:collapse;margin:20px 0'>
                <tr><td style='padding:8px;background:#f9f9f9'><b>Réservation</b></td><td>{$data['id']}</td></tr>
                <tr><td style='padding:8px'><b>Événement</b></td><td>{$data['event']}</td></tr>
                <tr><td style='padding:8px;background:#f9f9f9'><b>Siège</b></td><td>{$data['seat']}</td></tr>
                <tr><td style='padding:8px'><b>Montant</b></td><td>{$data['amount']}</td></tr>
                <tr><td style='padding:8px;background:#f9f9f9'><b>Date</b></td><td>{$data['date']}</td></tr>
            </table>

            <p><strong>Votre QR code d'entrée :</strong></p>
            <img src='data:image/png;base64,{$qrBase64}'
                 alt='QR Code'
                 style='width:200px;height:200px;display:block;margin:10px 0' />

            <p>Présentez ce QR code à l'entrée.</p>
            <p style='color:#888;font-size:12px'>Merci pour votre achat !</p>
        </div>";
    }
}