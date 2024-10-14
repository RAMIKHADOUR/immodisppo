<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012092526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE typesannonce (id INT AUTO_INCREMENT NOT NULL, type_annonce VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE annonces ADD typesannonce_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F1980601A FOREIGN KEY (typesannonce_id) REFERENCES typesannonce (id)');
        $this->addSql('CREATE INDEX IDX_CB988C6F1980601A ON annonces (typesannonce_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY FK_CB988C6F1980601A');
        $this->addSql('DROP TABLE typesannonce');
        $this->addSql('DROP INDEX IDX_CB988C6F1980601A ON annonces');
        $this->addSql('ALTER TABLE annonces DROP typesannonce_id');
    }
}
