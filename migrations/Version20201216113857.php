<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216113857 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE if not exists blog (id INT AUTO_INCREMENT NOT NULL, photos VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, auteur VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, nombre_commentaire VARCHAR(255) NOT NULL, texte LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists blogcategory (id INT AUTO_INCREMENT NOT NULL, rubrique VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists blogreply (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists booking (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, numero_mobile INT NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, nombre_participants INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists catfood (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists chef (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, photos VARCHAR(255) NOT NULL, facebook VARCHAR(255) NOT NULL, instagram VARCHAR(255) NOT NULL, twitter VARCHAR(255) NOT NULL, linkedin VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, sujet VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists features (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists menu (id INT AUTO_INCREMENT NOT NULL, plat VARCHAR(255) NOT NULL, prix INT NOT NULL, description VARCHAR(255) NOT NULL, photos VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists review (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE if not exists slider (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, src_image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE blogcategory');
        $this->addSql('DROP TABLE blogreply');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE catfood');
        $this->addSql('DROP TABLE chef');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE features');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE slider');
    }
}
