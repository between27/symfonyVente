<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231127225552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_chaussure (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taille_chaussure (id INT AUTO_INCREMENT NOT NULL, taille INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897BCF5E72D');
        $this->addSql('ALTER TABLE chaussure ADD taille_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D47897FF25611A FOREIGN KEY (taille_id) REFERENCES taille_chaussure (id)');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D47897BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_chaussure (id)');
        $this->addSql('CREATE INDEX IDX_43D47897FF25611A ON chaussure (taille_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897BCF5E72D');
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897FF25611A');
        $this->addSql('DROP TABLE categorie_chaussure');
        $this->addSql('DROP TABLE taille_chaussure');
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897BCF5E72D');
        $this->addSql('DROP INDEX IDX_43D47897FF25611A ON chaussure');
        $this->addSql('ALTER TABLE chaussure DROP taille_id');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D47897BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_vetement (id)');
    }
}
