<?php

namespace App\Entity;

use App\Repository\ArticleReactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleReactionRepository::class)]
#[ORM\Table(name: 'article_reaction')]
#[ORM\UniqueConstraint(name: 'uq_user_article_type', columns: ['id_user', 'id_article', 'type_reaction'])]
class ArticleReaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_reaction', type: Types::INTEGER)]
    private ?int $id_reaction = null;

    #[ORM\Column(name: 'id_article', type: Types::INTEGER)]
    private int $id_article;

    #[ORM\Column(name: 'id_user', type: Types::INTEGER)]
    private int $id_user;

    #[ORM\Column(name: 'type_reaction', type: 'string', length: 20)]
    private string $type_reaction; // like | bookmark | share | helpful

    #[ORM\Column(name: 'note', type: Types::SMALLINT, nullable: true)]
    private ?int $note = null; // 1–5 stars, optional

    #[ORM\Column(name: 'avis', type: 'string', length: 500, nullable: true)]
    private ?string $avis = null; // short optional opinion

    #[ORM\Column(name: 'date_reaction', type: Types::DATETIME_IMMUTABLE)]
    private \DateTimeImmutable $date_reaction;

    #[ORM\Column(name: 'is_anonymous', type: Types::BOOLEAN)]
    private bool $is_anonymous = false;

    public function __construct()
    {
        $this->date_reaction = new \DateTimeImmutable();
    }

    // ── Getters & Setters ─────────────────────────────────────────

    public function getIdReaction(): ?int { return $this->id_reaction; }

    public function getIdArticle(): int { return $this->id_article; }
    public function setIdArticle(int $id): static { $this->id_article = $id; return $this; }

    public function getIdUser(): int { return $this->id_user; }
    public function setIdUser(int $id): static { $this->id_user = $id; return $this; }

    public function getTypeReaction(): string { return $this->type_reaction; }
    public function setTypeReaction(string $type): static { $this->type_reaction = $type; return $this; }

    public function getNote(): ?int { return $this->note; }
    public function setNote(?int $note): static { $this->note = $note; return $this; }

    public function getAvis(): ?string { return $this->avis; }
    public function setAvis(?string $avis): static { $this->avis = $avis; return $this; }

    public function getDateReaction(): \DateTimeImmutable { return $this->date_reaction; }

    public function isAnonymous(): bool { return $this->is_anonymous; }
    public function setIsAnonymous(bool $v): static { $this->is_anonymous = $v; return $this; }

    public static function allowedTypes(): array
    {
        return ['like', 'bookmark', 'share', 'helpful'];
    }
}