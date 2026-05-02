<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class RegistrationMailService
{
    public function __construct(
        private readonly MailerInterface $mailer,
        private readonly string $appUrl,
    ) {}

    public function sendVerificationCode(string $toEmail, string $code): void
    {
        $email = (new Email())
            ->from('no-reply@bizcore.test')
            ->to($toEmail)
            ->subject('BizCore verification code')
            ->html(sprintf(
                '<p>Hello,</p><p>Your verification code is:</p><h2 style="letter-spacing:4px;">%s</h2><p>This code expires in 10 minutes.</p>',
                htmlspecialchars($code, ENT_QUOTES, 'UTF-8')
            ));

        $this->mailer->send($email);
    }
}