<?php

namespace App\Entity;

/**
 * Session-based notification DTO (not persisted to DB).
 */
class Notification
{
    private string $id;
    private ?User $user = null;
    private ?string $message = null;
    private string $type = 'info';
    private bool $isRead = false;
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->id        = uniqid('n', true);
        $this->createdAt = new \DateTime();
    }

    public function getId(): string { return $this->id; }
    public function setId(string $id): static { $this->id = $id; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): static { $this->user = $user; return $this; }

    public function getMessage(): ?string { return $this->message; }
    public function setMessage(string $message): static { $this->message = $message; return $this; }

    public function getType(): string { return $this->type; }
    public function setType(string $type): static { $this->type = $type; return $this; }

    public function isRead(): bool { return $this->isRead; }
    public function setIsRead(bool $isRead): static { $this->isRead = $isRead; return $this; }

    public function getCreatedAt(): \DateTimeInterface { return $this->createdAt; }
    public function setCreatedAt(\DateTimeInterface $createdAt): static { $this->createdAt = $createdAt; return $this; }

    public function getTimeAgo(): string
    {
        $diff = (new \DateTime())->getTimestamp() - $this->createdAt->getTimestamp();
        if ($diff < 60) return 'À l\'instant';
        if ($diff < 3600) return (int)($diff / 60) . ' min';
        if ($diff < 86400) return (int)($diff / 3600) . 'h';
        return $this->createdAt->format('d/m/Y');
    }
}
