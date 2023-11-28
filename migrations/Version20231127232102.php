<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231127232102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chaussure_taille_chaussure (chaussure_id INT NOT NULL, taille_chaussure_id INT NOT NULL, INDEX IDX_B4B347FFF8458E35 (chaussure_id), INDEX IDX_B4B347FF6DD831CB (taille_chaussure_id), PRIMARY KEY(chaussure_id, taille_chaussure_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chaussure_taille_chaussure ADD CONSTRAINT FK_B4B347FFF8458E35 FOREIGN KEY (chaussure_id) REFERENCES chaussure (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chaussure_taille_chaussure ADD CONSTRAINT FK_B4B347FF6DD831CB FOREIGN KEY (taille_chaussure_id) REFERENCES taille_chaussure (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chaussure DROP FOREIGN KEY FK_43D47897FF25611A');
        $this->addSql('DROP INDEX IDX_43D47897FF25611A ON chaussure');
        $this->addSql('ALTER TABLE chaussure DROP taille_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chaussure_taille_chaussure DROP FOREIGN KEY FK_B4B347FFF8458E35');
        $this->addSql('ALTER TABLE chaussure_taille_chaussure DROP FOREIGN KEY FK_B4B347FF6DD831CB');
        $this->addSql('DROP TABLE chaussure_taille_chaussure');
        $this->addSql('ALTER TABLE chaussure ADD taille_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chaussure ADD CONSTRAINT FK_43D47897FF25611A FOREIGN KEY (taille_id) REFERENCES taille_chaussure (id)');
        $this->addSql('CREATE INDEX IDX_43D47897FF25611A ON chaussure (taille_id)');
    }
}
