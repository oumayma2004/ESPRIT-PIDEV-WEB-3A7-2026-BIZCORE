<?php

namespace App\Command;

use App\Service\TelegramNotificationService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:test-sms',
    description: 'Test sending an SMS',
)]
class TestSmsCommand extends Command
{
    private TelegramNotificationService $smsService;

    public function __construct(TelegramNotificationService $smsService)
    {
        parent::__construct();
        $this->smsService = $smsService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $smsBody = "✅ Bonjour ! Votre paiement a été validé avec succès sur BizCore.\nCommande : #BZ-202611-1234\nProduit(s) : 1x Clavier Gamer Mécanique\nTotal réglé : 45.00 EUR\nMerci pour votre confiance et à très bientôt ! 🌟";
        $sent = $this->smsService->send($smsBody);

        if ($sent) {
            $io->success('SMS sent successfully.');
        } else {
            $io->error('Failed to send SMS.');
        }

        return Command::SUCCESS;
    }
}
