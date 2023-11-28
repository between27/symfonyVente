<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231127224514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_vetement (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chaussure (id INT AUTO_INCREMENT NOT NULL, marque_id INT NOT NULL, categorie_id INT NOT NULL, nom VARCHAR(200) NOT NULL, INDEX IDX_43D478974827B9B2 (marque_id), INDEX IDX_43D47897BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taille_vetement (id INT AUTO_INCREMENT NOT NULL, taille VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vetement (id INT AUTO_INCREMENT NOT NULL, marque_id INT NOT NULL, categorie_id INT NOT NULL, nom VARCHAR(200) NOT NULL, INDEX IDX_3CB446CF4827B9B2 (marque_id), INDEX IDX_3CB446CFBCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vetement_taille_vetement (vetement_id INT NOT NULL, taille_vetement_id INT NOT NULL, INDEX IDX_B21BBB4C969D8B67 (vetement_id), INDEX IDX_B21BBB4CB468F7AF (taille_vetement_id), PRIMARY KEY(vetement_id, taille_vetement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D478974827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D47897BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_vetement (id)');
        $this->addSql('ALTER TABLE vetement ADD CONSTRAINT FK_3CB446CF4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE vetement ADD CONSTRAINT FK_3CB446CFBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_vetement (id)');
        $this->addSql('ALTER TABLE vetement_taille_vetement ADD CONSTRAINT FK_B21BBB4C969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_taille_vetement ADD CONSTRAINT FK_B21BBB4CB468F7AF FOREIGN KEY (taille_vetement_id) REFERENCES taille_vetement (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE taille');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE taille (id INT AUTO_INCREMENT NOT NULL, taille VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D478974827B9B2');
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897BCF5E72D');
        $this->addSql('ALTER TABLE vetement DROP FOREIGN KEY FK_3CB446CF4827B9B2');
        $this->addSql('ALTER TABLE vetement DROP FOREIGN KEY FK_3CB446CFBCF5E72D');
        $this->addSql('ALTER TABLE vetement_taille_vetement DROP FOREIGN KEY FK_B21BBB4C969D8B67');
        $this->addSql('ALTER TABLE vetement_taille_vetement DROP FOREIGN KEY FK_B21BBB4CB468F7AF');
        $this->addSql('DROP TABLE categorie_vetement');
        $this->addSql('DROP TABLE chaussure');
        $this->addSql('DROP TABLE taille_vetement');
        $this->addSql('DROP TABLE vetement');
        $this->addSql('DROP TABLE vetement_taille_vetement');
    }
}
