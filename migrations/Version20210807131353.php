<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210807131353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fruit (id INT AUTO_INCREMENT NOT NULL, fruit_name VARCHAR(64) NOT NULL, genus VARCHAR(64) NOT NULL, family VARCHAR(64) NOT NULL, image_file VARCHAR(64) NOT NULL, carbohydrates NUMERIC(10, 2) NOT NULL, protein NUMERIC(10, 2) NOT NULL, fat NUMERIC(10, 2) NOT NULL, sugar NUMERIC(10, 2) NOT NULL, fiber NUMERIC(10, 2) NOT NULL, calories NUMERIC(10, 2) NOT NULL, harvested_in_january TINYINT(1) NOT NULL, harvested_in_february TINYINT(1) NOT NULL, harvested_in_march TINYINT(1) NOT NULL, harvested_in_april TINYINT(1) NOT NULL, harvested_in_may TINYINT(1) NOT NULL, harvested_in_june TINYINT(1) NOT NULL, harvested_in_july TINYINT(1) NOT NULL, harvested_in_august TINYINT(1) NOT NULL, harvested_in_september TINYINT(1) NOT NULL, harvested_in_october TINYINT(1) NOT NULL, harvested_in_november TINYINT(1) NOT NULL, harvested_in_december TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE legume (id INT AUTO_INCREMENT NOT NULL, legume_name VARCHAR(64) NOT NULL, genus VARCHAR(64) NOT NULL, family VARCHAR(64) NOT NULL, image_file VARCHAR(64) NOT NULL, carbohydrates NUMERIC(10, 2) NOT NULL, protein NUMERIC(10, 2) NOT NULL, fat NUMERIC(10, 2) NOT NULL, sugar NUMERIC(10, 2) NOT NULL, fiber NUMERIC(10, 2) NOT NULL, calories NUMERIC(10, 2) NOT NULL, harvested_in_january TINYINT(1) NOT NULL, harvested_in_february TINYINT(1) NOT NULL, harvested_in_march TINYINT(1) NOT NULL, harvested_in_april TINYINT(1) NOT NULL, harvested_in_may TINYINT(1) NOT NULL, harvested_in_june TINYINT(1) NOT NULL, harvested_in_july TINYINT(1) NOT NULL, harvested_in_august TINYINT(1) NOT NULL, harvested_in_september TINYINT(1) NOT NULL, harvested_in_october TINYINT(1) NOT NULL, harvested_in_november TINYINT(1) NOT NULL, harvested_in_december TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE product');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, created_by_id INT NOT NULL, product_name VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, genus VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, family VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image_file VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, carbohydrates NUMERIC(10, 2) NOT NULL, protein NUMERIC(10, 2) NOT NULL, fat NUMERIC(10, 2) NOT NULL, sugar NUMERIC(10, 2) NOT NULL, calories NUMERIC(10, 2) NOT NULL, harvested_in_january TINYINT(1) NOT NULL, harvested_in_february TINYINT(1) NOT NULL, harvested_in_march TINYINT(1) NOT NULL, harvested_in_april TINYINT(1) NOT NULL, harvested_in_may TINYINT(1) NOT NULL, harvested_in_june TINYINT(1) NOT NULL, harvested_in_july TINYINT(1) NOT NULL, harvested_in_august TINYINT(1) NOT NULL, harvested_in_september TINYINT(1) NOT NULL, harvested_in_october TINYINT(1) NOT NULL, harvested_in_november TINYINT(1) NOT NULL, harvested_in_december TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', fiber NUMERIC(10, 2) NOT NULL, INDEX IDX_D34A04AD12469DE2 (category_id), INDEX IDX_D34A04ADB03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADB03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE fruit');
        $this->addSql('DROP TABLE legume');
    }
}
