<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260430012216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(255) NOT NULL, telephone VARCHAR(20) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, statut VARCHAR(20) DEFAULT NULL, date_inscription DATETIME DEFAULT NULL, derniere_connexion DATETIME DEFAULT NULL, id_role INT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649DC499668 (id_role), PRIMARY KEY (id_user)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649DC499668 FOREIGN KEY (id_role) REFERENCES role (id_role)');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY `FK_BF5476CA6B3CA4B`');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY `fk_user_role`');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE article CHANGE contenu contenu LONGTEXT NOT NULL, CHANGE image_principale image_principale VARCHAR(255) DEFAULT NULL, CHANGE categorie categorie VARCHAR(100) DEFAULT NULL, CHANGE statut statut VARCHAR(20) DEFAULT NULL, CHANGE nombre_vues nombre_vues INT NOT NULL, CHANGE mots_cles mots_cles VARCHAR(500) DEFAULT NULL, CHANGE resume_ia resume_ia LONGTEXT DEFAULT NULL, CHANGE ton_ia ton_ia VARCHAR(30) DEFAULT NULL, CHANGE categorie_ia categorie_ia VARCHAR(100) DEFAULT NULL, CHANGE trending_score trending_score DOUBLE PRECISION DEFAULT NULL, CHANGE trending_updated_at trending_updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE article_reaction CHANGE avis avis VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE article_signalement CHANGE date_traitement date_traitement DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE coach CHANGE domaine domaine VARCHAR(50) DEFAULT NULL, CHANGE biographie biographie TEXT DEFAULT NULL, CHANGE tarif_horaire tarif_horaire NUMERIC(10, 2) DEFAULT NULL, CHANGE disponibilite disponibilite VARCHAR(20) DEFAULT NULL, CHANGE note_moyenne note_moyenne NUMERIC(3, 2) DEFAULT NULL, CHANGE num_tel num_tel VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCC6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCCA632A3BC FOREIGN KEY (id_domaine) REFERENCES domaine_coaching (id_domaine)');
        $this->addSql('CREATE INDEX IDX_3F596DCC6B3CA4B ON coach (id_user)');
        $this->addSql('CREATE INDEX IDX_3F596DCCA632A3BC ON coach (id_domaine)');
        $this->addSql('ALTER TABLE commande CHANGE statut statut VARCHAR(20) DEFAULT NULL, CHANGE mode_paiement mode_paiement VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire_evenement DROP FOREIGN KEY `FK_84B1E7298B13D439`');
        $this->addSql('ALTER TABLE commentaire_evenement ADD id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire_evenement ADD CONSTRAINT FK_84B1E7298B13D439 FOREIGN KEY (id_evenement) REFERENCES evenement (id_evenement)');
        $this->addSql('ALTER TABLE commentaire_evenement ADD CONSTRAINT FK_84B1E7296B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('CREATE INDEX IDX_84B1E7296B3CA4B ON commentaire_evenement (id_user)');
        $this->addSql('ALTER TABLE disponibilite DROP FOREIGN KEY `FK_2CBACE2FD1DC2CFC`');
        $this->addSql('ALTER TABLE disponibilite ADD CONSTRAINT FK_2CBACE2FD1DC2CFC FOREIGN KEY (id_coach) REFERENCES coach (id_coach) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE domaine_coaching CHANGE niveau_difficulte niveau_difficulte VARCHAR(20) DEFAULT \'Débutant\' NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7DDF8D118D200104 ON domaine_coaching (nom_domaine)');
        $this->addSql('ALTER TABLE evenement CHANGE prix prix NUMERIC(10, 2) DEFAULT NULL, CHANGE image_url image_url VARCHAR(500) DEFAULT NULL, CHANGE lieu lieu VARCHAR(255) DEFAULT NULL, CHANGE ai_rating ai_rating DOUBLE PRECISION DEFAULT NULL, CHANGE ai_positive ai_positive DOUBLE PRECISION DEFAULT NULL, CHANGE ai_neutral ai_neutral DOUBLE PRECISION DEFAULT NULL, CHANGE ai_negative ai_negative DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE inscription_evenement DROP FOREIGN KEY `FK_AD33AA066B3CA4B`');
        $this->addSql('ALTER TABLE inscription_evenement CHANGE statut statut VARCHAR(20) DEFAULT NULL, CHANGE nom nom VARCHAR(100) DEFAULT NULL, CHANGE email email VARCHAR(150) DEFAULT NULL, CHANGE telephone telephone VARCHAR(20) DEFAULT NULL, CHANGE payment_status payment_status VARCHAR(30) DEFAULT \'pending\', CHANGE stripe_session_id stripe_session_id VARCHAR(255) DEFAULT NULL, CHANGE montant_total montant_total NUMERIC(10, 2) DEFAULT NULL, CHANGE devise devise VARCHAR(10) DEFAULT \'tnd\', CHANGE paid_at paid_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE inscription_evenement ADD CONSTRAINT FK_AD33AA066B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE inscription_evenement RENAME INDEX fk_ins_event TO IDX_AD33AA068B13D439');
        $this->addSql('ALTER TABLE inscription_evenement RENAME INDEX fk_ins_user TO IDX_AD33AA066B3CA4B');
        $this->addSql('ALTER TABLE produit CHANGE description description LONGTEXT DEFAULT NULL, CHANGE categorie categorie VARCHAR(100) DEFAULT NULL, CHANGE image_url image_url VARCHAR(500) DEFAULT NULL, CHANGE statut statut VARCHAR(20) DEFAULT NULL, CHANGE rating rating DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY `FK_D88926226B3CA4B`');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY `FK_D8892622D1DC2CFC`');
        $this->addSql('ALTER TABLE rating CHANGE id_user id_user INT DEFAULT NULL, CHANGE id_coach id_coach INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926226B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622D1DC2CFC FOREIGN KEY (id_coach) REFERENCES coach (id_coach)');
        $this->addSql('ALTER TABLE rating RENAME INDEX uniq_d88926226b3ca4b_d1dc2cfc TO UNIQ_RATING_USER_COACH');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C849556B3CA4B`');
        $this->addSql('ALTER TABLE reservation CHANGE id_user id_user INT DEFAULT NULL, CHANGE id_coach id_coach INT DEFAULT NULL, CHANGE date_seance date_seance DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE review_cache CHANGE data data JSON NOT NULL');
        $this->addSql('DROP INDEX nom_role ON role');
        $this->addSql('ALTER TABLE role DROP description, DROP date_creation');
        $this->addSql('ALTER TABLE vendor CHANGE telephone telephone VARCHAR(20) DEFAULT NULL, CHANGE rating rating DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notification (id_notification INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, message LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, is_read TINYINT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_BF5476CA6B3CA4B (id_user), PRIMARY KEY (id_notification)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, telephone VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, adresse VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, statut VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, date_inscription DATETIME DEFAULT \'current_timestamp()\' NOT NULL, derniere_connexion DATETIME DEFAULT \'NULL\', id_role INT DEFAULT NULL, UNIQUE INDEX email (email), INDEX fk_user_role (id_role), PRIMARY KEY (id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT `FK_BF5476CA6B3CA4B` FOREIGN KEY (id_user) REFERENCES users (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT `fk_user_role` FOREIGN KEY (id_role) REFERENCES role (id_role)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649DC499668');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE article CHANGE contenu contenu TEXT NOT NULL, CHANGE image_principale image_principale VARCHAR(500) DEFAULT \'NULL\', CHANGE categorie categorie VARCHAR(100) DEFAULT \'NULL\', CHANGE statut statut VARCHAR(20) DEFAULT \'NULL\', CHANGE nombre_vues nombre_vues INT DEFAULT 0, CHANGE mots_cles mots_cles VARCHAR(500) DEFAULT \'NULL\' COMMENT \'Mots-clés générés par l\'\'IA\', CHANGE resume_ia resume_ia TEXT DEFAULT NULL COMMENT \'Résumé SEO généré par l\'\'IA\', CHANGE ton_ia ton_ia VARCHAR(30) DEFAULT \'NULL\' COMMENT \'Ton détecté par l\'\'IA: Informatif|Motivant|Technique|Narratif\', CHANGE categorie_ia categorie_ia VARCHAR(100) DEFAULT \'NULL\' COMMENT \'Catégorie suggérée par l\'\'IA\', CHANGE trending_score trending_score FLOAT DEFAULT \'NULL\' COMMENT \'Score de tendance calculé par TrendingService\', CHANGE trending_updated_at trending_updated_at DATETIME DEFAULT \'NULL\' COMMENT \'Dernière mise à jour du trending_score\'');
        $this->addSql('ALTER TABLE article_reaction CHANGE avis avis VARCHAR(500) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE article_signalement CHANGE date_traitement date_traitement DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCC6B3CA4B');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCCA632A3BC');
        $this->addSql('DROP INDEX IDX_3F596DCC6B3CA4B ON coach');
        $this->addSql('DROP INDEX IDX_3F596DCCA632A3BC ON coach');
        $this->addSql('ALTER TABLE coach CHANGE biographie biographie TEXT DEFAULT NULL, CHANGE tarif_horaire tarif_horaire NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE disponibilite disponibilite VARCHAR(20) DEFAULT \'NULL\', CHANGE domaine domaine VARCHAR(50) DEFAULT \'NULL\', CHANGE num_tel num_tel VARCHAR(20) DEFAULT \'NULL\', CHANGE note_moyenne note_moyenne NUMERIC(3, 2) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE commande CHANGE statut statut VARCHAR(20) DEFAULT \'NULL\', CHANGE mode_paiement mode_paiement VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE commentaire_evenement DROP FOREIGN KEY FK_84B1E7298B13D439');
        $this->addSql('ALTER TABLE commentaire_evenement DROP FOREIGN KEY FK_84B1E7296B3CA4B');
        $this->addSql('DROP INDEX IDX_84B1E7296B3CA4B ON commentaire_evenement');
        $this->addSql('ALTER TABLE commentaire_evenement DROP id_user');
        $this->addSql('ALTER TABLE commentaire_evenement ADD CONSTRAINT `FK_84B1E7298B13D439` FOREIGN KEY (id_evenement) REFERENCES evenement (id_evenement) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE disponibilite DROP FOREIGN KEY FK_2CBACE2FD1DC2CFC');
        $this->addSql('ALTER TABLE disponibilite ADD CONSTRAINT `FK_2CBACE2FD1DC2CFC` FOREIGN KEY (id_coach) REFERENCES coach (id_coach)');
        $this->addSql('DROP INDEX UNIQ_7DDF8D118D200104 ON domaine_coaching');
        $this->addSql('ALTER TABLE domaine_coaching CHANGE niveau_difficulte niveau_difficulte VARCHAR(20) DEFAULT \'\'\'Débutant\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE prix prix NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE image_url image_url VARCHAR(500) DEFAULT \'NULL\', CHANGE lieu lieu VARCHAR(255) DEFAULT \'NULL\', CHANGE ai_rating ai_rating DOUBLE PRECISION DEFAULT \'NULL\', CHANGE ai_positive ai_positive DOUBLE PRECISION DEFAULT \'NULL\', CHANGE ai_neutral ai_neutral DOUBLE PRECISION DEFAULT \'NULL\', CHANGE ai_negative ai_negative DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE inscription_evenement DROP FOREIGN KEY FK_AD33AA066B3CA4B');
        $this->addSql('ALTER TABLE inscription_evenement CHANGE statut statut VARCHAR(20) DEFAULT \'NULL\', CHANGE nom nom VARCHAR(100) DEFAULT \'NULL\', CHANGE email email VARCHAR(150) DEFAULT \'NULL\', CHANGE telephone telephone VARCHAR(20) DEFAULT \'NULL\', CHANGE payment_status payment_status VARCHAR(30) DEFAULT \'\'\'pending\'\'\', CHANGE stripe_session_id stripe_session_id VARCHAR(255) DEFAULT \'NULL\', CHANGE montant_total montant_total NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE devise devise VARCHAR(10) DEFAULT \'\'\'tnd\'\'\', CHANGE paid_at paid_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE inscription_evenement ADD CONSTRAINT `FK_AD33AA066B3CA4B` FOREIGN KEY (id_user) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE inscription_evenement RENAME INDEX idx_ad33aa068b13d439 TO fk_ins_event');
        $this->addSql('ALTER TABLE inscription_evenement RENAME INDEX idx_ad33aa066b3ca4b TO fk_ins_user');
        $this->addSql('ALTER TABLE produit CHANGE description description TEXT DEFAULT NULL, CHANGE categorie categorie VARCHAR(100) DEFAULT \'NULL\', CHANGE image_url image_url VARCHAR(500) DEFAULT \'NULL\', CHANGE statut statut VARCHAR(20) DEFAULT \'NULL\', CHANGE rating rating DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926226B3CA4B');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622D1DC2CFC');
        $this->addSql('ALTER TABLE rating CHANGE id_user id_user INT NOT NULL, CHANGE id_coach id_coach INT NOT NULL');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT `FK_D88926226B3CA4B` FOREIGN KEY (id_user) REFERENCES users (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT `FK_D8892622D1DC2CFC` FOREIGN KEY (id_coach) REFERENCES coach (id_coach) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating RENAME INDEX uniq_rating_user_coach TO UNIQ_D88926226B3CA4B_D1DC2CFC');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849556B3CA4B');
        $this->addSql('ALTER TABLE reservation CHANGE date_seance date_seance DATE DEFAULT \'NULL\', CHANGE id_user id_user INT NOT NULL, CHANGE id_coach id_coach INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT `FK_42C849556B3CA4B` FOREIGN KEY (id_user) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE review_cache CHANGE data data LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE role ADD description VARCHAR(255) DEFAULT \'NULL\', ADD date_creation DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX nom_role ON role (nom_role)');
        $this->addSql('ALTER TABLE vendor CHANGE telephone telephone VARCHAR(20) DEFAULT \'NULL\', CHANGE rating rating DOUBLE PRECISION DEFAULT \'NULL\'');
    }
}
