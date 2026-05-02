<?php

namespace App\Entity;

use App\Entity\Coach;
use App\Repository\DomaineCoachingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DomaineCoachingRepository::class)]
#[ORM\Table(name: 'domaine_coaching')]
#[UniqueEntity(fields: ['nomDomaine'], message: 'Un domaine avec ce nom existe déjà.')]
class DomaineCoaching
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_domaine')]
    /** @phpstan-ignore-next-line */
    private ?int $idDomaine = null;

    #[ORM\Column(name: 'nom_domaine', type: 'string', length: 100, unique: true)]
    #[Assert\NotBlank(message: 'Le nom du domaine ne peut pas être vide.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le nom doit contenir au minimum {{ limit }} caractères.',
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ][a-zA-ZÀ-ÿ0-9\s\-&\'.,]*$/u',
        message: 'Le nom doit commencer par une lettre et ne contenir que des caractères valides.'
    )]
    private string $nomDomaine = '';

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\NotBlank(message: 'La description est obligatoire.')]
    #[Assert\Length(
        min: 10,
        minMessage: 'La description doit contenir au minimum {{ limit }} caractères.'
    )]
    private ?string $description = null;

    #[ORM\Column(name: 'niveau_difficulte', type: 'string', length: 20, options: ['default' => 'Débutant'])]
    #[Assert\NotBlank(message: 'Le niveau de difficulté est obligatoire.')]
    #[Assert\Choice(
        choices: ['Débutant', 'Intermédiaire', 'Expert'],
        message: 'Veuillez choisir un niveau valide : Débutant, Intermédiaire ou Expert.'
    )]
    private string $niveauDifficulte = 'Débutant';

    #[ORM\Column(name: 'duree_formation_heures', type: 'integer', nullable: true)]
    #[Assert\NotBlank(message: 'La durée de formation est obligatoire.')]
    #[Assert\Positive(message: 'La durée de formation doit être un entier positif.')]
    private ?int $dureeFormationHeures = null;

    /** @var Collection<int, Coach> */
    #[ORM\OneToMany(targetEntity: Coach::class, mappedBy: 'domaineCoaching')]
    private Collection $coaches;

    public function __construct()
    {
        $this->coaches = new ArrayCollection();
    }

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

    /** @return Collection<int, Coach> */
    public function getCoaches(): Collection
    {
        return $this->coaches;
    }

    public function addCoach(Coach $coach): static
    {
        if (!$this->coaches->contains($coach)) {
            $this->coaches->add($coach);
            $coach->setDomaineCoaching($this);
        }
        return $this;
    }

    public function removeCoach(Coach $coach): static
    {
        if ($this->coaches->removeElement($coach)) {
            if ($coach->getDomaineCoaching() === $this) {
                $coach->setDomaineCoaching(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->nomDomaine;
    }
}
