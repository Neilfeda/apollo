<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210309155345 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accreditation (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE burden_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment_property (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, editet_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE construction (id INT AUTO_INCREMENT NOT NULL, construction_type VARCHAR(100) NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE construction_period (id INT AUTO_INCREMENT NOT NULL, priodicity VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE construction_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, size INT NOT NULL, room_number INT NOT NULL, bedroom_number INT NOT NULL, storey VARCHAR(50) NOT NULL, charges VARCHAR(255) NOT NULL, availability_date DATETIME NOT NULL, note VARCHAR(255) DEFAULT NULL, rental_line TINYINT(1) NOT NULL, video VARCHAR(255) DEFAULT NULL, bail INT NOT NULL, monoproperty TINYINT(1) NOT NULL, indication_water_state TINYINT(1) NOT NULL, fiber TINYINT(1) NOT NULL, tnt TINYINT(1) NOT NULL, bale_tv TINYINT(1) NOT NULL, indicator_heater_state TINYINT(1) NOT NULL, batch_number INT NOT NULL, rentale_reference INT NOT NULL, provision_charges TINYINT(1) NOT NULL, adress VARCHAR(50) NOT NULL, green_house VARCHAR(1) NOT NULL, energy_performance_certificate VARCHAR(1) NOT NULL, posta_code VARCHAR(50) NOT NULL, city VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, telephone_number_show_off VARCHAR(50) NOT NULL, amout_insurrance_colocation VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property_file (id INT AUTO_INCREMENT NOT NULL, energy_performance_certificate VARCHAR(255) NOT NULL, diagnosis_electricity_and_gas VARCHAR(255) NOT NULL, diagnosis_lead VARCHAR(255) NOT NULL, condominium_rule VARCHAR(255) NOT NULL, inventory_first_view VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rental_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rentale (id INT AUTO_INCREMENT NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker (id INT AUTO_INCREMENT NOT NULL, corporation_name VARCHAR(50) NOT NULL, company_number INT NOT NULL, trade_name VARCHAR(50) NOT NULL, postal_adress VARCHAR(100) NOT NULL, phone_number INT NOT NULL, mail_adress VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE accreditation');
        $this->addSql('DROP TABLE burden_type');
        $this->addSql('DROP TABLE comment_property');
        $this->addSql('DROP TABLE construction');
        $this->addSql('DROP TABLE construction_period');
        $this->addSql('DROP TABLE construction_type');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE property');
        $this->addSql('DROP TABLE property_file');
        $this->addSql('DROP TABLE rental_type');
        $this->addSql('DROP TABLE rentale');
        $this->addSql('DROP TABLE worker');
    }
}
