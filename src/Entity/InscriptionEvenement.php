<?php

namespace App\Entity;

use App\Repository\InscriptionEvenementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: InscriptionEvenementRepository::class)]
#[ORM\Table(name: 'inscription_evenement')]
class InscriptionEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_inscription')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Evenement::class)]
    #[ORM\JoinColumn(name: 'id_evenement', referencedColumnName: 'id_evenement')]
    private ?Evenement $evenement = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id_user')]
    private ?User $user = null;

    #[ORM\Column(name: 'date_inscription', type: 'datetime')]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $statut = 'confirme';

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire')]
    private ?string $nom = null;

    #[ORM\Column(length: 150, nullable: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: 'Email invalide')]
    private ?string $email = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(name: 'nombre_places', type: 'integer', nullable: true)]
    #[Assert\Positive(message: 'Le nombre de places doit etre positif')]
    private ?int $nombrePlaces = 1;

    #[ORM\Column(name: 'payment_status', length: 30, nullable: true, options: ['default' => 'pending'])]
    private ?string $paymentStatus = 'pending';

    #[ORM\Column(name: 'stripe_session_id', length: 255, nullable: true)]
    private ?string $stripeSessionId = null;

    #[ORM\Column(name: 'montant_total', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?string $montantTotal = null;

    #[ORM\Column(name: 'devise', length: 10, nullable: true, options: ['default' => 'tnd'])]
    private ?string $devise = 'tnd';

    #[ORM\Column(name: 'paid_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $paidAt = null;

    public function __construct()
    {
        $this->dateReservation = new \DateTime();
        $this->statut          = 'confirme';
        $this->paymentStatus   = 'pending';
        $this->devise          = 'tnd';
    }

    public function getId(): ?int { return $this->id; }

    public function getEvenement(): ?Evenement { return $this->evenement; }
    public function setEvenement(?Evenement $evenement): static { $this->evenement = $evenement; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }

    public function getDateReservation(): ?\DateTimeInterface { return $this->dateReservation; }
    public function setDateReservation(\DateTimeInterface $d): static { $this->dateReservation = $d; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): static { $this->statut = $statut; return $this; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(?string $nom): static { $this->nom = $nom; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(?string $email): static { $this->email = $email; return $this; }

    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(?string $telephone): static { $this->telephone = $telephone; return $this; }

    public function getNombrePlaces(): ?int { return $this->nombrePlaces; }
    public function setNombrePlaces(?int $nombrePlaces): static { $this->nombrePlaces = $nombrePlaces; return $this; }

    public function getPaymentStatus(): ?string { return $this->paymentStatus; }
    public function setPaymentStatus(?string $paymentStatus): static { $this->paymentStatus = $paymentStatus; return $this; }

    public function getStripeSessionId(): ?string { return $this->stripeSessionId; }
    public function setStripeSessionId(?string $stripeSessionId): static { $this->stripeSessionId = $stripeSessionId; return $this; }

    public function getMontantTotal(): ?string { return $this->montantTotal; }
    public function setMontantTotal(?string $montantTotal): static { $this->montantTotal = $montantTotal; return $this; }

    public function getDevise(): ?string { return $this->devise; }
    public function setDevise(?string $devise): static { $this->devise = $devise ? strtolower($devise) : 'tnd'; return $this; }

    public function getPaidAt(): ?\DateTimeInterface { return $this->paidAt; }
    public function setPaidAt(?\DateTimeInterface $paidAt): static { $this->paidAt = $paidAt; return $this; }
}