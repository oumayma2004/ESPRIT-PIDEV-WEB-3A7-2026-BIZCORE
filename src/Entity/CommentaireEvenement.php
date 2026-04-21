<?php

namespace App\Entity;

use App\Repository\CommentaireEvenementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentaireEvenementRepository::class)]
#[ORM\Table(name: 'commentaire_evenement')]
class CommentaireEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_commentaire', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "Le commentaire est obligatoire")]
    #[Assert\Length(
        min: 5,
        max: 500,
        minMessage: "Minimum 5 caractères",
        maxMessage: "Maximum 500 caractères"
    )]
    private ?string $contenu = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $note = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\ManyToOne(targetEntity: Evenement::class, inversedBy: 'commentaires')]
    #[ORM\JoinColumn(name: 'id_evenement', referencedColumnName: 'id_evenement', onDelete: 'CASCADE')]
    private ?Evenement $evenement = null;

    // ================= GETTERS & SETTERS =================

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;
        return $this;
    }
}