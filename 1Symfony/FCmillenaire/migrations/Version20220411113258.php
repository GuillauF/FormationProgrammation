<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220411113258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE name name VARCHAR(255) NOT NULL, CHANGE joueur joueur VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE joueur CHANGE name name VARCHAR(100) NOT NULL, CHANGE surname surname VARCHAR(100) NOT NULL, CHANGE mail mail VARCHAR(100) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE genre genre VARCHAR(255) NOT NULL, CHANGE country country VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservation_billet CHANGE user_id user_id INT NOT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE price price VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservation_billet ADD CONSTRAINT FK_57F2036DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE joueur joueur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE joueur CHANGE name name VARCHAR(100) DEFAULT NULL, CHANGE surname surname VARCHAR(100) DEFAULT NULL, CHANGE mail mail VARCHAR(100) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE genre genre VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_billet DROP FOREIGN KEY FK_57F2036DA76ED395');
        $this->addSql('ALTER TABLE reservation_billet CHANGE user_id user_id INT DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE price price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP name');
    }
}
