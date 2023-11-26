<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126143958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger DROP INDEX UNIQ_EFE35A0D64775A84, ADD INDEX IDX_EFE35A0D64775A84 (pain_id)');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D7AB984B7');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D8F038184');
        $this->addSql('DROP INDEX IDX_EFE35A0D8F038184 ON burger');
        $this->addSql('DROP INDEX IDX_EFE35A0D7AB984B7 ON burger');
        $this->addSql('ALTER TABLE burger DROP oignon_id, DROP sauce_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger DROP INDEX IDX_EFE35A0D64775A84, ADD UNIQUE INDEX UNIQ_EFE35A0D64775A84 (pain_id)');
        $this->addSql('ALTER TABLE burger ADD oignon_id INT DEFAULT NULL, ADD sauce_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D7AB984B7 FOREIGN KEY (sauce_id) REFERENCES sauce (id)');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D8F038184 FOREIGN KEY (oignon_id) REFERENCES oignon (id)');
        $this->addSql('CREATE INDEX IDX_EFE35A0D8F038184 ON burger (oignon_id)');
        $this->addSql('CREATE INDEX IDX_EFE35A0D7AB984B7 ON burger (sauce_id)');
    }
}
