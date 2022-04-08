<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408095115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE joueur joueur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE joueur CHANGE name name VARCHAR(100) DEFAULT NULL, CHANGE surname surname VARCHAR(100) DEFAULT NULL, CHANGE mail mail VARCHAR(100) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE genre genre VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE joueur joueur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE joueur CHANGE name name VARCHAR(100) DEFAULT NULL, CHANGE surname surname VARCHAR(100) DEFAULT NULL, CHANGE mail mail VARCHAR(100) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE genre genre VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
    }
}
