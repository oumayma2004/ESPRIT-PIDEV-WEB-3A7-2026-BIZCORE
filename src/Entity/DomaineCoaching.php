<?php

namespace App\Entity;

use App\Repository\DomaineCoachingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DomaineCoachingRepository::class)]
#[ORM\Table(name: 'domaine_coaching')]
class DomaineCoaching
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_domaine')]
    private ?int $idDomaine = null;

    #[ORM\Column(name: 'nom_domaine', type: 'string', length: 100)]
    #[Assert\NotBlank(message: 'Le nom du domaine ne peut pas être vide')]
    #[Assert\Length(min: 2, max: 100, minMessage: 'Le nom doit contenir au minimum 2 caractères')]
    #[Assert\Regex(pattern: '/^[a-zA-Z\x{00C0}-\x{00FF}]/u', message: 'Le nom doit commencer par une lettre')]
    private string $nomDomaine = '';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'niveau_difficulte', type: 'string', length: 20, options: ['default' => 'Débutant'])]
    #[Assert\NotBlank(message: 'Le niveau de difficulté est obligatoire')]
    #[Assert\Choice(choices: ['Débutant', 'Intermédiaire', 'Expert'], message: 'Niveau invalide')]
    private string $niveauDifficulte = 'Débutant';

    #[ORM\Column(name: 'duree_formation_heures', type: 'integer', nullable: true)]
    #[Assert\PositiveOrZero(message: 'La durée doit être positive')]
    private ?int $dureeFormationHeures = null;

    public function getId(): ?int
    {
        return $this->idDomaine;
    }

    public function getIdDomaine(): ?int
    {
        return $this->idDomaine;
    }

    public function getNomDomaine(): string
    {
        return $this->nomDomaine;
    }

    public function setNomDomaine(string $nomDomaine): static
    {
        $this->nomDomaine = trim($nomDomaine);
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description ? trim($description) : null;
        return $this;
    }

    public function getNiveauDifficulte(): string
    {
        return $this->niveauDifficulte;
    }

    public function setNiveauDifficulte(string $niveauDifficulte): static
    {
        $this->niveauDifficulte = $niveauDifficulte;
        return $this;
    }

    public function getDureeFormationHeures(): ?int
    {
        return $this->dureeFormationHeures;
    }

    public function setDureeFormationHeures(?int $dureeFormationHeures): static
    {
        $this->dureeFormationHeures = $dureeFormationHeures;
        return $this;
    }

    public function __toString(): string
    {
        return $this->nomDomaine;
    }
}
