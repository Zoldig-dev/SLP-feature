<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211027104046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloc DROP FOREIGN KEY FK_C778955A5AA4DFF5');
        $this->addSql('DROP TABLE page_custom');
        $this->addSql('DROP INDEX IDX_C778955A5AA4DFF5 ON bloc');
        $this->addSql('ALTER TABLE bloc ADD backgroud VARCHAR(255) DEFAULT NULL, ADD path2 VARCHAR(255) DEFAULT NULL, ADD description VARCHAR(255) DEFAULT NULL, ADD description2 VARCHAR(255) DEFAULT NULL, ADD content2 VARCHAR(255) DEFAULT NULL, ADD content3 VARCHAR(255) DEFAULT NULL, ADD content4 VARCHAR(255) DEFAULT NULL, ADD content5 VARCHAR(255) DEFAULT NULL, ADD content6 VARCHAR(255) DEFAULT NULL, DROP page_custom_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE page_custom (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, link VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE bloc ADD page_custom_id INT DEFAULT NULL, DROP backgroud, DROP path2, DROP description, DROP description2, DROP content2, DROP content3, DROP content4, DROP content5, DROP content6');
        $this->addSql('ALTER TABLE bloc ADD CONSTRAINT FK_C778955A5AA4DFF5 FOREIGN KEY (page_custom_id) REFERENCES page_custom (id)');
        $this->addSql('CREATE INDEX IDX_C778955A5AA4DFF5 ON bloc (page_custom_id)');
    }
}
