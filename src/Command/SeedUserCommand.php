<?php

namespace App\Command;

use App\Entity\User;
use App\Entity\Role;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:seed-user',
    description: 'Seeds a regular user into the database',
)]
class SeedUserCommand extends Command
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $userEmail = 'user@bizcore.com';
        $userPassword = 'userpassword123';

        $userRepository = $this->entityManager->getRepository(User::class);
        $existingUser = $userRepository->findOneBy(['email' => $userEmail]);

        if ($existingUser) {
            $io->note(sprintf('User with email %s already exists.', $userEmail));
            return Command::SUCCESS;
        }

        $roleRepository = $this->entityManager->getRepository(Role::class);
        $userRole = $roleRepository->findOneBy(['nomRole' => 'User']);

        if (!$userRole) {
            $io->error('User role not found in database. Please ensure roles are seeded first.');
            return Command::FAILURE;
        }

        $user = new User();
        $user->setEmail($userEmail);
        $user->setNom('User');
        $user->setPrenom('Bizcore');
        $user->setRoleEntity($userRole);
        $user->setStatut('actif');
        
        $hashedPassword = $this->passwordHasher->hashPassword($user, $userPassword);
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success(sprintf('Regular user created successfully with email: %s and password: %s', $userEmail, $userPassword));

        return Command::SUCCESS;
    }
}
