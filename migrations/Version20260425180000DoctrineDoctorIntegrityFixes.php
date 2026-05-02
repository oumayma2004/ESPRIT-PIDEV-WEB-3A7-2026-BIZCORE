<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * DoctrineDoctor integrity fixes (idempotent).
 *
 * Corrige les problèmes d'intégrité signalés par DoctrineDoctor :
 *   - Nettoyage des réservations orphelines
 *   - Ajout de la FK manquante reservation.id_coach -> coach (ON DELETE CASCADE)
 *   - Ajout de la FK manquante reservation.id_user  -> users (ON DELETE CASCADE)
 *   - Index UNIQUE sur domaine_coaching.nom_domaine
 */
final class Version20260425180000DoctrineDoctorIntegrityFixes extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'DoctrineDoctor integrity fixes: missing reservation FKs and unique constraint on domaine_coaching';
    }

    public function up(Schema $schema): void
    {
        $conn = $this->connection;
        $schemaName = $conn->getDatabase();

        // 1) Nettoyage des lignes orphelines (sinon la création de FK échoue)
        $this->addSql('DELETE FROM reservation WHERE id_coach NOT IN (SELECT id_coach FROM coach)');
        $this->addSql('DELETE FROM reservation WHERE id_user  NOT IN (SELECT id_user  FROM users)');

        // 2) FK reservation.id_coach (idempotent)
        $hasCoachFk = (int) $conn->fetchOne(
            "SELECT COUNT(*) FROM information_schema.REFERENTIAL_CONSTRAINTS
             WHERE CONSTRAINT_SCHEMA = ? AND TABLE_NAME = 'reservation'
               AND CONSTRAINT_NAME = 'FK_42C84955D1DC2CFC'",
            [$schemaName]
        );
        if ($hasCoachFk === 0) {
            $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955D1DC2CFC FOREIGN KEY (id_coach) REFERENCES coach (id_coach) ON DELETE CASCADE');
        }

        // 3) FK reservation.id_user (idempotent)
        $hasUserFk = (int) $conn->fetchOne(
            "SELECT COUNT(*) FROM information_schema.REFERENTIAL_CONSTRAINTS
             WHERE CONSTRAINT_SCHEMA = ? AND TABLE_NAME = 'reservation'
               AND CONSTRAINT_NAME = 'FK_42C849556B3CA4B'",
            [$schemaName]
        );
        if ($hasUserFk === 0) {
            $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556B3CA4B FOREIGN KEY (id_user) REFERENCES users (id_user) ON DELETE CASCADE');
        }

        // 4) UNIQUE INDEX sur domaine_coaching.nom_domaine (idempotent)
        $hasUnique = (int) $conn->fetchOne(
            "SELECT COUNT(*) FROM information_schema.STATISTICS
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'domaine_coaching'
               AND INDEX_NAME = 'UNIQ_7DDF8D118D200104'",
            [$schemaName]
        );
        if ($hasUnique === 0) {
            $this->addSql('CREATE UNIQUE INDEX UNIQ_7DDF8D118D200104 ON domaine_coaching (nom_domaine)');
        }

        // 5) Vérification que disponibilite.FK_2CBACE2FD1DC2CFC est en CASCADE
        $deleteRule = (string) $conn->fetchOne(
            "SELECT DELETE_RULE FROM information_schema.REFERENTIAL_CONSTRAINTS
             WHERE CONSTRAINT_SCHEMA = ? AND TABLE_NAME = 'disponibilite'
               AND CONSTRAINT_NAME = 'FK_2CBACE2FD1DC2CFC'",
            [$schemaName]
        );
        if ($deleteRule !== '' && $deleteRule !== 'CASCADE') {
            $this->addSql('ALTER TABLE disponibilite DROP FOREIGN KEY `FK_2CBACE2FD1DC2CFC`');
            $this->addSql('ALTER TABLE disponibilite ADD CONSTRAINT FK_2CBACE2FD1DC2CFC FOREIGN KEY (id_coach) REFERENCES coach (id_coach) ON DELETE CASCADE');
        }
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX UNIQ_7DDF8D118D200104 ON domaine_coaching');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955D1DC2CFC');
    }
}
