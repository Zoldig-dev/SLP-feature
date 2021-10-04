<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211004135925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image ADD slider_id INT DEFAULT NULL, ADD home_page_client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F2CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FA27D0EE5 FOREIGN KEY (home_page_client_id) REFERENCES home_page_client (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F2CCC9638 ON image (slider_id)');
        $this->addSql('CREATE INDEX IDX_C53D045FA27D0EE5 ON image (home_page_client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F2CCC9638');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FA27D0EE5');
        $this->addSql('DROP INDEX IDX_C53D045F2CCC9638 ON image');
        $this->addSql('DROP INDEX IDX_C53D045FA27D0EE5 ON image');
        $this->addSql('ALTER TABLE image DROP slider_id, DROP home_page_client_id');
    }
}
