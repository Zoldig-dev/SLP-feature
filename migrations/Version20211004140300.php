<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211004140300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloc ADD page_custom_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bloc ADD CONSTRAINT FK_C778955A5AA4DFF5 FOREIGN KEY (page_custom_id) REFERENCES page_custom (id)');
        $this->addSql('CREATE INDEX IDX_C778955A5AA4DFF5 ON bloc (page_custom_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloc DROP FOREIGN KEY FK_C778955A5AA4DFF5');
        $this->addSql('DROP INDEX IDX_C778955A5AA4DFF5 ON bloc');
        $this->addSql('ALTER TABLE bloc DROP page_custom_id');
    }
}
