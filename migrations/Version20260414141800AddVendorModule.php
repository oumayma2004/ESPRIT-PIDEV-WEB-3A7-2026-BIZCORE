<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration : création de la table `vendor` et ajout de la colonne `vendor_id`
 * sur la table `produit` (relation ManyToOne Product → Vendor, ON DELETE CASCADE).
 */
final class Version20260414141800AddVendorModule extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de la table vendor et relation ManyToOne avec produit (vendor_id, ON DELETE CASCADE)';
    }

    public function up(Schema $schema): void
    {
        // ── 1. Créer la table vendor ───────────────────────────────────────────
        $this->addSql('
            CREATE TABLE IF NOT EXISTS vendor (
                id          INT AUTO_INCREMENT NOT NULL,
                nom         VARCHAR(100)  NOT NULL,
                email       VARCHAR(150)  NOT NULL,
                telephone   VARCHAR(20)   DEFAULT NULL,
                statut      VARCHAR(20)   NOT NULL DEFAULT \'actif\',
                UNIQUE INDEX UNIQ_F52233F6E7927C74 (email),
                PRIMARY KEY (id)
            ) DEFAULT CHARACTER SET utf8mb4
              COLLATE `utf8mb4_unicode_ci`
              ENGINE = InnoDB
        ');

        // ── 2. Ajouter vendor_id sur la table produit (nullable) ──────────────
        //    On vérifie d'abord que la colonne n'existe pas déjà pour pouvoir
        //    relancer la migration sans erreur.
        $this->addSql('
            ALTER TABLE produit
                ADD COLUMN IF NOT EXISTS vendor_id INT DEFAULT NULL
        ');

        // ── 3. Ajouter la contrainte de clé étrangère avec ON DELETE CASCADE ──
        //    (si elle n'existe pas déjà)
        $this->addSql('
            ALTER TABLE produit
                ADD CONSTRAINT IF NOT EXISTS FK_PRODUIT_VENDOR
                FOREIGN KEY (vendor_id)
                REFERENCES vendor (id)
                ON DELETE SET NULL
        ');

        // ── 4. Créer l'index sur vendor_id pour la performance ────────────────
        $this->addSql('
            CREATE INDEX IF NOT EXISTS IDX_PRODUIT_VENDOR_ID ON produit (vendor_id)
        ');
    }

    public function down(Schema $schema): void
    {
        // Supprimer la FK et la colonne sur produit
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY IF EXISTS FK_PRODUIT_VENDOR');
        $this->addSql('DROP INDEX IF EXISTS IDX_PRODUIT_VENDOR_ID ON produit');
        $this->addSql('ALTER TABLE produit DROP COLUMN IF EXISTS vendor_id');

        // Supprimer la table vendor
        $this->addSql('DROP TABLE IF EXISTS vendor');
    }
}
