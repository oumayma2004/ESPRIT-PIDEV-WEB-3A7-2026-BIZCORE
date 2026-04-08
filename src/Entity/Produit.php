<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
#[ORM\Table(name: 'produit')]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_produit', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'nom_produit', length: 255)]
    private string $nomProduit = '';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private string $prix = '0.00';

    #[ORM\Column(name: 'stock_disponible', type: 'integer', nullable: true)]
    private ?int $stockDisponible = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(name: 'image_url', length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}