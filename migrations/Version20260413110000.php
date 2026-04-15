<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260413110000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Stripe payment tracking fields to event reservations';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE inscription_evenement ADD payment_status VARCHAR(30) NOT NULL DEFAULT 'pending', ADD stripe_session_id VARCHAR(255) DEFAULT NULL, ADD montant_total NUMERIC(10, 2) DEFAULT NULL, ADD devise VARCHAR(10) NOT NULL DEFAULT 'tnd', ADD paid_at DATETIME DEFAULT NULL");
        $this->addSql("UPDATE inscription_evenement ie LEFT JOIN evenement e ON ie.id_evenement = e.id_evenement SET ie.payment_status = 'paid', ie.devise = 'tnd', ie.montant_total = COALESCE(e.prix, 0) * COALESCE(ie.nombre_places, 1), ie.paid_at = COALESCE(ie.date_inscription, NOW())");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE inscription_evenement DROP payment_status, DROP stripe_session_id, DROP montant_total, DROP devise, DROP paid_at');
    }
}
