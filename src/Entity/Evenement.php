<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
#[ORM\Table(name: 'evenement')]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_evenement', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $titre = '';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(name: 'date_debut', type: 'datetime')]
    private \DateTimeInterface $dateDebut;

    #[ORM\Column(name: 'date_fin', type: 'datetime')]
    private \DateTimeInterface $dateFin;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(name: 'capacite_max', type: 'integer', nullable: true)]
    private ?int $capaciteMax = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(name: 'image_url', length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}