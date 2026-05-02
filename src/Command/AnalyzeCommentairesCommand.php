<?php

namespace App\Command;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use App\Service\AIAnalyzerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:ai:analyze-commentaires',
    description: 'Run the local AI commentaire analysis model for one event or all events.',
)]
class AnalyzeCommentairesCommand extends Command
{
    public function __construct(
        private readonly EvenementRepository $evenementRepository,
        private readonly AIAnalyzerService $analyzer,
        private readonly EntityManagerInterface $entityManager,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('eventId', InputArgument::OPTIONAL, 'Event id to analyze. Leave empty to analyze all events.')
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Show analysis without saving it.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $eventId = $input->getArgument('eventId');
        $dryRun = (bool) $input->getOption('dry-run');

        $events = $eventId
            ? [$this->evenementRepository->find((int) $eventId)]
            : $this->evenementRepository->findAll();

        $events = array_values(array_filter($events, static fn ($event) => $event instanceof Evenement));

        if ($events === []) {
            $io->error($eventId ? 'Event not found.' : 'No events found.');

            return Command::FAILURE;
        }

        foreach ($events as $event) {
            $comments = [];

            foreach ($event->getCommentaires() as $commentaire) {
                $content = trim((string) $commentaire->getContenu());

                if ($content !== '') {
                    $comments[] = $content;
                }
            }

            $result = $this->analyzer->analyzeComments($comments);

            $io->section(sprintf('Event #%d - %s', $event->getId(), $event->getTitle() ?? 'Untitled'));
            $io->table(
                ['Comments', 'Rating', 'Positive', 'Neutral', 'Negative', 'Model'],
                [[
                    count($comments),
                    $result['rating'],
                    $result['positive'] . '%',
                    $result['neutral'] . '%',
                    $result['negative'] . '%',
                    $result['model'] ?? 'unknown',
                ]]
            );
            $io->text($result['summary']);

            if (!$dryRun && $result['rating'] > 0) {
                $event->setAiRating($result['rating']);
                $event->setAiPositive($result['positive']);
                $event->setAiNeutral($result['neutral']);
                $event->setAiNegative($result['negative']);
                $event->setAiSummary($result['summary']);
            }
        }

        if (!$dryRun) {
            $this->entityManager->flush();
            $io->success('AI commentaire analysis saved.');
        } else {
            $io->success('Dry run completed. Nothing was saved.');
        }

        return Command::SUCCESS;
    }
}
