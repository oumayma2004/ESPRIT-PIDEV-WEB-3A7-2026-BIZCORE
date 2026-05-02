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
    name: 'app:seed-admin',
    description: 'Seeds an admin user into the database',
)]
class SeedAdminCommand extends Command
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

        $adminEmail = 'admin@bizcore.com';
        $adminPassword = 'adminpassword123';

        $userRepository = $this->entityManager->getRepository(User::class);
        $existingUser = $userRepository->findOneBy(['email' => $adminEmail]);

        if ($existingUser) {
            $io->note(sprintf('User with email %s already exists.', $adminEmail));
            return Command::SUCCESS;
        }

        $roleRepository = $this->entityManager->getRepository(Role::class);
        $adminRole = $roleRepository->findOneBy(['nomRole' => 'Admin']);

        if (!$adminRole) {
            $io->error('Admin role not found in database. Please ensure roles are seeded first.');
            return Command::FAILURE;
        }

        $user = new User();
        $user->setEmail($adminEmail);
        $user->setNom('Admin');
        $user->setPrenom('Bizcore');
        $user->setRoleEntity($adminRole);
        $user->setStatut('actif');
        
        $hashedPassword = $this->passwordHasher->hashPassword($user, $adminPassword);
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success(sprintf('Admin user created successfully with email: %s and password: %s', $adminEmail, $adminPassword));

        return Command::SUCCESS;
    }
}
