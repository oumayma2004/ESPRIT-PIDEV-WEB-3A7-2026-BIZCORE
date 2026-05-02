<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Relation JOIN : coach.id_domaine -> domaine_coaching.id_domaine
 * ON DELETE CASCADE : supprimer un domaine supprime automatiquement ses coachs.
 * ON UPDATE CASCADE : modifier id_domaine dans domaine_coaching propage la valeur dans coach.
 */
final class Version20260422100000AddFkCoachDomaine extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add FK coach.id_domaine -> domaine_coaching.id_domaine with ON DELETE CASCADE ON UPDATE CASCADE';
    }

    public function up(Schema $schema): void
    {
        // Drop existing FK if any (safe no-op if absent)
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY IF EXISTS fk_coach_domaine');

        // Ensure an index exists on the FK column (required by InnoDB)
        $this->addSql('ALTER TABLE coach MODIFY COLUMN id_domaine INT DEFAULT NULL');

        $this->addSql(
            'ALTER TABLE coach
             ADD CONSTRAINT fk_coach_domaine
             FOREIGN KEY (id_domaine)
             REFERENCES domaine_coaching (id_domaine)
             ON DELETE CASCADE
             ON UPDATE CASCADE'
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY IF EXISTS fk_coach_domaine');
    }
}
