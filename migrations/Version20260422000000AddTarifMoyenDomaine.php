<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260422000000AddTarifMoyenDomaine extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Replace duree_formation_heures with tarif_moyen_domaine on domaine_coaching table';
    }

    public function up(Schema $schema): void
    {
        // Add tarif_moyen_domaine column
        $this->addSql("ALTER TABLE domaine_coaching
            ADD COLUMN IF NOT EXISTS tarif_moyen_domaine DECIMAL(10,2) DEFAULT NULL");

        // Remove the old duree_formation_heures column (may not exist in all environments)
        $this->addSql("ALTER TABLE domaine_coaching
            DROP COLUMN IF EXISTS duree_formation_heures");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("ALTER TABLE domaine_coaching
            ADD COLUMN IF NOT EXISTS duree_formation_heures INT DEFAULT NULL");

        $this->addSql("ALTER TABLE domaine_coaching
            DROP COLUMN IF EXISTS tarif_moyen_domaine");
    }
}
