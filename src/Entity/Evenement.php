<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
=======
>>>>>>> gdd

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
#[ORM\Table(name: 'evenement')]
class Evenement
{
<<<<<<< HEAD
  #[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column(name: 'id_evenement', type: 'integer')]
private ?int $id = null;
=======
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_evenement', type: Types::INTEGER)]
    private ?int $id = null;
>>>>>>> gdd

    #[ORM\Column(name: 'titre', length: 200)]
    private ?string $title = null;

    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'prix', type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?string $price = null;

    #[ORM\Column(name: 'date_debut', type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(name: 'capacite_max', type: Types::INTEGER, nullable: true)]
    private ?int $capacity = null;

    #[ORM\Column(name: 'image_url', length: 500, nullable: true)]
    private ?string $image = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255, nullable: true)]
#[Assert\NotBlank(message: 'Le lieu est obligatoire.')]
#[Assert\Length(
    min: 5,
    max: 255,
    minMessage: 'Le lieu doit contenir au moins {{ limit }} caractères.',
    maxMessage: 'Le lieu ne peut pas dépasser {{ limit }} caractères.'
)]
#[Assert\Regex(
    pattern: '/^[a-zA-ZÀ-ÿ0-9\s\,\.\-\/]+$/u',
    message: 'Le lieu contient des caractères non valides.'
)]

private ?string $lieu = null;

#[ORM\OneToMany(mappedBy: 'evenement', targetEntity: CommentaireEvenement::class)]
private Collection $commentaires;
#[ORM\Column(nullable: true)]
private ?float $aiRating = null;

#[ORM\Column(type: 'float', nullable: true)]
private ?float $aiPositive = null;

#[ORM\Column(type: 'float', nullable: true)]
private ?float $aiNeutral = null;

#[ORM\Column(type: 'float', nullable: true)]
private ?float $aiNegative = null;

#[ORM\Column(type: 'text', nullable: true)]
private ?string $aiSummary = null;
public function getAiRating(): ?float { return $this->aiRating; }
public function setAiRating(?float $v): static { $this->aiRating = $v; return $this; }

public function getAiPositive(): ?float { return $this->aiPositive; }
public function setAiPositive(?float $v): static { $this->aiPositive = $v; return $this; }

public function getAiNeutral(): ?float { return $this->aiNeutral; }
public function setAiNeutral(?float $v): static { $this->aiNeutral = $v; return $this; }

public function getAiNegative(): ?float { return $this->aiNegative; }
public function setAiNegative(?float $v): static { $this->aiNegative = $v; return $this; }

public function getAiSummary(): ?string { return $this->aiSummary; }
public function setAiSummary(?string $v): static { $this->aiSummary = $v; return $this; }
public function __construct()
{
    $this->commentaires = new ArrayCollection();
}
public function getCommentaires(): Collection
{
    return $this->commentaires;
}

public function getLieu(): ?string
{
    return $this->lieu;
}

public function setLieu(?string $lieu): static
{
    $this->lieu = $lieu;
    return $this;
}

=======
>>>>>>> gdd
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): static
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }
}