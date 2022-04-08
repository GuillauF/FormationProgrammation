<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408111835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_billet (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, numero INT NOT NULL, price VARCHAR(255) NOT NULL, INDEX IDX_57F2036DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE store (id INT AUTO_INCREMENT NOT NULL, ventes VARCHAR(255) NOT NULL, billets VARCHAR(255) NOT NULL, maillots VARCHAR(255) NOT NULL, shorts VARCHAR(255) NOT NULL, sweats VARCHAR(255) NOT NULL, accessoires VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation_billet ADD CONSTRAINT FK_57F2036DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE equipe CHANGE name name VARCHAR(255) NOT NULL, CHANGE joueur joueur VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE joueur CHANGE name name VARCHAR(100) NOT NULL, CHANGE surname surname VARCHAR(100) NOT NULL, CHANGE mail mail VARCHAR(100) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE genre genre VARCHAR(255) NOT NULL, CHANGE country country VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation_billet');
        $this->addSql('DROP TABLE store');
        $this->addSql('ALTER TABLE equipe CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE joueur joueur VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE joueur CHANGE name name VARCHAR(100) DEFAULT NULL, CHANGE surname surname VARCHAR(100) DEFAULT NULL, CHANGE mail mail VARCHAR(100) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE genre genre VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
    }
}
