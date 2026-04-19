<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260415120000EnrichDomaineCoaching extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Enrich domaine_coaching table with niveau_difficulte and duree_formation_heures, add CASCADE FK on coach.id_domaine';
    }

    public function up(Schema $schema): void
    {
        // Add new columns to domaine_coaching
        $this->addSql("ALTER TABLE domaine_coaching
            ADD COLUMN niveau_difficulte VARCHAR(20) NOT NULL DEFAULT 'Débutant',
            ADD COLUMN duree_formation_heures INT DEFAULT NULL");

        // Drop existing FK on coach.id_domaine if it exists (ignore error)
        $this->addSql("ALTER TABLE coach DROP FOREIGN KEY IF EXISTS fk_domaine");
        $this->addSql("ALTER TABLE coach DROP FOREIGN KEY IF EXISTS fk_coach_domaine");

        // Add CASCADE DELETE FK from coach.id_domaine → domaine_coaching.id_domaine
        $this->addSql("ALTER TABLE coach
            ADD CONSTRAINT fk_coach_domaine
            FOREIGN KEY (id_domaine) REFERENCES domaine_coaching(id_domaine)
            ON DELETE CASCADE");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("ALTER TABLE coach DROP FOREIGN KEY IF EXISTS fk_coach_domaine");
        $this->addSql("ALTER TABLE domaine_coaching DROP COLUMN niveau_difficulte, DROP COLUMN duree_formation_heures");
    }
}
