<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241010222448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE descriptions (id INT AUTO_INCREMENT NOT NULL, annonce_id INT DEFAULT NULL, etat LONGTEXT NOT NULL, surface DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, nchambres INT NOT NULL, nsallebains INT NOT NULL, netages INT NOT NULL, queletage INT NOT NULL, internet TINYINT(1) NOT NULL, garage TINYINT(1) NOT NULL, piscine TINYINT(1) NOT NULL, camerasurv TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_C96EAEB68805AB2F (annonce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE descriptions ADD CONSTRAINT FK_C96EAEB68805AB2F FOREIGN KEY (annonce_id) REFERENCES annonces (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE descriptions DROP FOREIGN KEY FK_C96EAEB68805AB2F');
        $this->addSql('DROP TABLE descriptions');
    }
}
