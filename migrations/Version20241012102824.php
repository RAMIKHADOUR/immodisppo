<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012102824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cordonnes (id INT AUTO_INCREMENT NOT NULL, corannonce_id INT DEFAULT NULL, civilite VARCHAR(50) NOT NULL, nom_prenom VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, tel_mobile VARCHAR(255) NOT NULL, tel_fixe VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_31EAAE742B4A2B00 (corannonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cordonnes ADD CONSTRAINT FK_31EAAE742B4A2B00 FOREIGN KEY (corannonce_id) REFERENCES annonces (id)');
        $this->addSql('ALTER TABLE annonces ADD reference VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cordonnes DROP FOREIGN KEY FK_31EAAE742B4A2B00');
        $this->addSql('DROP TABLE cordonnes');
        $this->addSql('ALTER TABLE annonces DROP reference');
    }
}
