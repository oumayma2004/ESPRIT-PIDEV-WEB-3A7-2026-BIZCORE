<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 20)]
    private ?string $telephone = null;

    // ← RENOMMÉ : underscore → camelCase, colonne DB explicite
    #[ORM\Column(name: 'nombre_places', type: 'integer')]
    private ?int $nombrePlaces = null;

    #[ORM\Column(length: 20)]
    private ?string $statut = null;

    #[ORM\Column(name: 'date_reservation', type: 'datetime')]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Evenement $evenement = null;

    public function getId(): ?int { return $this->id; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }

    public function getTelephone(): ?string { return $this->telephone; }
    public function setTelephone(string $telephone): self { $this->telephone = $telephone; return $this; }

    // ← getter/setter utilisent maintenant $this->nombrePlaces (camelCase)
    public function getNombrePlaces(): ?int { return $this->nombrePlaces; }
    public function setNombrePlaces(int $nombrePlaces): self { $this->nombrePlaces = $nombrePlaces; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function getDateReservation(): ?\DateTimeInterface { return $this->dateReservation; }
    public function setDateReservation(\DateTimeInterface $dateReservation): self { $this->dateReservation = $dateReservation; return $this; }

    public function getEvenement(): ?Evenement { return $this->evenement; }
    public function setEvenement(?Evenement $evenement): self { $this->evenement = $evenement; return $this; }
}