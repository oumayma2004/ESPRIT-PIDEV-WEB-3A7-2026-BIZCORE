<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Service\RecaptchaVerifier;
use App\Service\RegistrationMailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/auth/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('dashboard');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/auth/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        SessionInterface $session,
        RecaptchaVerifier $recaptchaVerifier,
        RegistrationMailService $mailService,
        UserRepository $userRepository
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('dashboard');
        }

        $error = '';
        $old = [
            'nom' => '',
            'prenom' => '',
            'email' => '',
            'telephone' => '',
            'adresse' => '',
        ];

        if ($request->isMethod('POST')) {
            $nom = trim((string) $request->request->get('nom', ''));
            $prenom = trim((string) $request->request->get('prenom', ''));
            $email = trim((string) $request->request->get('email', ''));
            $password = (string) $request->request->get('password', '');
            $telephone = trim((string) $request->request->get('telephone', ''));
            $adresse = trim((string) $request->request->get('adresse', ''));
            $recaptchaToken = (string) $request->request->get('recaptcha_token', '');

            $old = compact('nom', 'prenom', 'email', 'telephone', 'adresse');

            if ($nom === '' || $prenom === '' || $email === '' || $password === '') {
                $error = 'Please fill in all required fields.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = 'Please enter a valid email address.';
            } elseif ($userRepository->emailExists($email)) {
                $error = 'This email is already registered.';
            } elseif (!$recaptchaVerifier->verify($recaptchaToken, 'register', $request->getClientIp())) {
                $error = 'Captcha verification failed. Please try again.';
            } else {
                $verificationCode = (string) random_int(100000, 999999);

                $session->set('pending_registration', [
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'email' => $email,
                    'password' => $password,
                    'telephone' => $telephone,
                    'adresse' => $adresse,
                    'code' => password_hash($verificationCode, PASSWORD_DEFAULT),
                    'expires_at' => time() + 600,
                ]);

                $mailService->sendVerificationCode($email, $verificationCode);

                return $this->redirectToRoute('app_verify_email');
            }
        }

        return $this->render('security/register.html.twig', [
            'error' => $error,
            'old' => $old,
            'recaptchaSiteKey' => $_ENV['RECAPTCHA_SITE_KEY'] ?? '',
            'recaptchaEnabled' => filter_var($_ENV['RECAPTCHA_ENABLED'] ?? '1', FILTER_VALIDATE_BOOL),
        ]);
    }

    #[Route('/auth/verify-email', name: 'app_verify_email', methods: ['GET', 'POST'])]
    public function verifyEmail(
        Request $request,
        SessionInterface $session,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        RoleRepository $roleRepository
    ): Response {
        $pending = $session->get('pending_registration');

        if (!$pending) {
            return $this->redirectToRoute('app_register');
        }

        $error = '';

        if ($request->isMethod('POST')) {
            $code = trim((string) $request->request->get('code', ''));

            if ($code === '') {
                $error = 'Please enter the verification code.';
            } elseif (($pending['expires_at'] ?? 0) < time()) {
                $session->remove('pending_registration');
                $error = 'Your verification code has expired. Please register again.';
            } elseif (!password_verify($code, (string) $pending['code'])) {
                $error = 'Invalid verification code.';
            } else {
                $user = new User();
                $user->setNom($pending['nom']);
                $user->setPrenom($pending['prenom']);
                $user->setEmail($pending['email']);
                $user->setPassword($passwordHasher->hashPassword($user, $pending['password']));
                $user->setTelephone($pending['telephone'] !== '' ? $pending['telephone'] : null);
                $user->setAdresse($pending['adresse'] !== '' ? $pending['adresse'] : null);
                $user->setStatut('actif');

                $defaultRole = $roleRepository->findOneBy(['nomRole' => 'User']);
                if (!$defaultRole instanceof Role) {
                    $defaultRole = $roleRepository->find(2);
                }
                $user->setRoleEntity($defaultRole);

                $em->persist($user);
                $em->flush();

                $session->remove('pending_registration');

                return $this->redirectToRoute('app_login', [
                    'verified' => 1,
                ]);
            }
        }

        return $this->render('security/verify_email.html.twig', [
            'error' => $error,
            'email' => $pending['email'] ?? '',
        ]);
    }

    #[Route('/auth/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This should never be reached.');
    }
}
