<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210809173849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fruit DROP FOREIGN KEY FK_A00BD297B03A8386');
        $this->addSql('DROP INDEX IDX_A00BD297B03A8386 ON fruit');
        $this->addSql('ALTER TABLE fruit DROP created_by_id');
        $this->addSql('ALTER TABLE legume DROP FOREIGN KEY FK_86667383B03A8386');
        $this->addSql('DROP INDEX IDX_86667383B03A8386 ON legume');
        $this->addSql('ALTER TABLE legume DROP created_by_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fruit ADD created_by_id INT NOT NULL');
        $this->addSql('ALTER TABLE fruit ADD CONSTRAINT FK_A00BD297B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A00BD297B03A8386 ON fruit (created_by_id)');
        $this->addSql('ALTER TABLE legume ADD created_by_id INT NOT NULL');
        $this->addSql('ALTER TABLE legume ADD CONSTRAINT FK_86667383B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_86667383B03A8386 ON legume (created_by_id)');
    }
}
