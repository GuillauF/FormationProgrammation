<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408084205 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_billet ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_billet ADD CONSTRAINT FK_57F2036DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_57F2036DA76ED395 ON reservation_billet (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_billet DROP FOREIGN KEY FK_57F2036DA76ED395');
        $this->addSql('DROP INDEX IDX_57F2036DA76ED395 ON reservation_billet');
        $this->addSql('ALTER TABLE reservation_billet DROP user_id');
    }
}
