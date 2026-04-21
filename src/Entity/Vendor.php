<?php

namespace App\Entity;

use App\Repository\VendorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: VendorRepository::class)]
#[ORM\Table(name: 'vendor')]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé par un autre vendeur.')]
class Vendor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(message: 'Le nom du vendeur est obligatoire.')]
    #[Assert\Length(max: 100, maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.')]
    private string $nom = '';

    #[ORM\Column(type: 'string', length: 150, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[Assert\Length(max: 150, maxMessage: "L'email ne peut pas dépasser {{ limit }} caractères.")]
    private string $email = '';

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    #[Assert\Length(max: 20, maxMessage: 'Le téléphone ne peut pas dépasser {{ limit }} caractères.')]
    private ?string $telephone = null;

    #[ORM\Column(type: 'string', length: 20)]
    private string $statut = 'actif';

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $rating = 0.0;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $ratingCount = 0;

    #[ORM\OneToMany(mappedBy: 'vendeur', targetEntity: Product::class)]
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(?float $rating): static
    {
        $this->rating = $rating;
        return $this;
    }

    public function getRatingCount(): ?int
    {
        return $this->ratingCount;
    }

    public function setRatingCount(?int $ratingCount): static
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    public function addRating(float $score): void
    {
        $currentTotal = ($this->rating ?? 0.0) * ($this->ratingCount ?? 0);
        $this->ratingCount = ($this->ratingCount ?? 0) + 1;
        $this->rating = ($currentTotal + $score) / $this->ratingCount;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setVendeur($this);
        }
        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            if ($product->getVendeur() === $this) {
                $product->setVendeur(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->nom . ' <' . $this->email . '>';
    }
}
