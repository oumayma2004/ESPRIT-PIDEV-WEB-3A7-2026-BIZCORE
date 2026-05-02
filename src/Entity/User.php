<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Role;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
#[ORM\HasLifecycleCallbacks]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
   #[ORM\Id]
#[ORM\GeneratedValue(strategy: "AUTO")]
#[ORM\Column(name: "id_user", type: "integer")]
private ?int $id = null;

    #[ORM\Column(length: 100)]
    private string $nom = '';

    #[ORM\Column(length: 100)]
    private string $prenom = '';

    #[ORM\Column(length: 100, unique: true)]
    private string $email = '';

    #[ORM\Column(length: 255)]
    private string $password = '';

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(name: 'adresse', length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(name: 'statut', length: 20, nullable: true)]
    private ?string $statut = 'actif';

    #[ORM\Column(name: 'date_inscription', type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $dateInscription = null;

    #[ORM\Column(name: 'derniere_connexion', type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $derniereConnexion = null;

    #[ORM\ManyToOne(targetEntity: Role::class)]
#[ORM\JoinColumn(name: 'id_role', referencedColumnName: 'id_role')]
private ?Role $roleEntity = null;
    #[ORM\PrePersist]
    public function onCreate(): void
    {
        if ($this->dateInscription === null) {
            $this->dateInscription = new \DateTimeImmutable();
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getRoles(): array
    {
        $roles = ['ROLE_USER'];
        if ($this->roleEntity && $this->roleEntity->getNomRole() === 'Admin') {
            $roles[] = 'ROLE_ADMIN';
        }
        return array_unique($roles);
    }



    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(?\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;
        return $this;
    }

    public function getDerniereConnexion(): ?\DateTimeInterface
    {
        return $this->derniereConnexion;
    }

    public function setDerniereConnexion(?\DateTimeInterface $derniereConnexion): self
    {
        $this->derniereConnexion = $derniereConnexion;
        return $this;
    }

    public function getRoleEntity(): ?Role
    {
        return $this->roleEntity;
    }

    public function setRoleEntity(?Role $roleEntity): self
{
    $this->roleEntity = $roleEntity;
    return $this;
}

    public function getFullName(): string
{
    return trim($this->prenom . ' ' . $this->nom);
}


    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function eraseCredentials(): void {}
}
