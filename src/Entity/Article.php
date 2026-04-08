<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
#[ORM\Table(name: 'article')]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_article', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $titre = '';

    #[ORM\Column(type: 'text')]
    private string $contenu = '';

    #[ORM\Column(name: 'image_principale', length: 255, nullable: true)]
    private ?string $imagePrincipale = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(name: 'nombre_vues', type: 'integer', nullable: true)]
    private int $nombreVues = 0;

    public function getId(): ?int
    {
        return $this->id;
    }
}