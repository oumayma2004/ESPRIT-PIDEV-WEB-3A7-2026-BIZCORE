<?php

namespace App\Entity;

use App\Repository\SignalementArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * SignalementArticle — Entité frontend (côté utilisateur)
 *
 * Permet aux entrepreneurs de signaler un article comme :
 *   - inapproprié / faux / spam / hors sujet
 * L'admin voit les signalements dans le back-office
 * et peut agir (archiver, corriger, supprimer l'article).
 *
 * Liens DB :
 *   article_signalement.id_article  → article.id_article
 *   article_signalement.id_user     → users.id_user
 */
#[ORM\Entity(repositoryClass: SignalementArticleRepository::class)]
#[ORM\Table(name: 'article_signalement')]
#[ORM\UniqueConstraint(name: 'uq_user_article_signalement', columns: ['id_user', 'id_article'])]
class SignalementArticle
{
    // ── Statuts possibles (traitement côté admin) ─────────────────
    public const STATUT_EN_ATTENTE = 'en_attente';
    public const STATUT_TRAITE     = 'traite';
    public const STATUT_REJETE     = 'rejete';

    // ── Motifs de signalement ─────────────────────────────────────
    public const MOTIFS = [
        'Contenu inapproprié'       => 'inapproprie',
        'Informations incorrectes'  => 'incorrect',
        'Contenu spam / publicité'  => 'spam',
        'Hors sujet / mal catégorisé' => 'hors_sujet',
        'Contenu dupliqué'          => 'doublon',
        'Autre'                     => 'autre',
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_signalement', type: Types::INTEGER)]
    private ?int $id_signalement = null;

    #[ORM\Column(name: 'id_article', type: Types::INTEGER)]
    private int $id_article;

    #[ORM\Column(name: 'id_user', type: Types::INTEGER)]
    private int $id_user;

    #[ORM\Column(name: 'motif', type: 'string', length: 50)]
    private string $motif; // une des valeurs de self::MOTIFS

    #[ORM\Column(name: 'description', type: Types::TEXT, nullable: true)]
    private ?string $description = null; // explication libre (optionnel)

    #[ORM\Column(name: 'statut', type: 'string', length: 20)]
    private string $statut = self::STATUT_EN_ATTENTE;

    #[ORM\Column(name: 'date_signalement', type: Types::DATETIME_IMMUTABLE)]
    private \DateTimeImmutable $date_signalement;

    #[ORM\Column(name: 'date_traitement', type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $date_traitement = null;

    #[ORM\Column(name: 'remarque_admin', type: Types::TEXT, nullable: true)]
    private ?string $remarque_admin = null; // note laissée par l'admin lors du traitement

    public function __construct()
    {
        $this->date_signalement = new \DateTimeImmutable();
    }

    // ── Getters & Setters ─────────────────────────────────────────

    public function getIdSignalement(): ?int { return $this->id_signalement; }

    public function getIdArticle(): int { return $this->id_article; }
    public function setIdArticle(int $v): static { $this->id_article = $v; return $this; }

    public function getIdUser(): int { return $this->id_user; }
    public function setIdUser(int $v): static { $this->id_user = $v; return $this; }

    public function getMotif(): string { return $this->motif; }
    public function setMotif(string $v): static { $this->motif = $v; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $v): static { $this->description = $v; return $this; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $v): static { $this->statut = $v; return $this; }

    public function getDateSignalement(): \DateTimeImmutable { return $this->date_signalement; }

    public function getDateTraitement(): ?\DateTimeImmutable { return $this->date_traitement; }
    public function setDateTraitement(?\DateTimeImmutable $v): static { $this->date_traitement = $v; return $this; }

    public function getRemarqueAdmin(): ?string { return $this->remarque_admin; }
    public function setRemarqueAdmin(?string $v): static { $this->remarque_admin = $v; return $this; }

    // ── Helpers ───────────────────────────────────────────────────
    public function isEnAttente(): bool { return $this->statut === self::STATUT_EN_ATTENTE; }
    public function isTraite(): bool    { return $this->statut === self::STATUT_TRAITE; }

    public static function getAllStatuts(): array
    {
        return [self::STATUT_EN_ATTENTE, self::STATUT_TRAITE, self::STATUT_REJETE];
    }
}
