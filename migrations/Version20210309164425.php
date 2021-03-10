<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210309164425 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accreditation (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agreement (id INT AUTO_INCREMENT NOT NULL, creation_date DATETIME NOT NULL, signing_date DATETIME NOT NULL, date_beginning_agreement_period DATETIME NOT NULL, date_end_agreement_period DATETIME NOT NULL, rentale_off_load INT NOT NULL, charge VARCHAR(50) NOT NULL, text VARCHAR(255) NOT NULL, purchasing_mode VARCHAR(50) NOT NULL, purchasing_deadline LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', lead_duration INT NOT NULL, construction_provision INT NOT NULL, optional_provision INT NOT NULL, additional_rent INT NOT NULL, rent_reference_index INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE apply (id INT AUTO_INCREMENT NOT NULL, apply_date DATETIME NOT NULL, wishing_date DATETIME NOT NULL, apply_approval VARCHAR(10) NOT NULL, rentale_confirmation VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE burden_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, place VARCHAR(255) DEFAULT NULL, creating_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, date_at DATETIME NOT NULL, content VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment_property (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, editet_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE construction (id INT AUTO_INCREMENT NOT NULL, construction_type VARCHAR(100) NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE construction_period (id INT AUTO_INCREMENT NOT NULL, priodicity VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE construction_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entity (id INT AUTO_INCREMENT NOT NULL, quantity INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profession (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, size INT NOT NULL, room_number INT NOT NULL, bedroom_number INT NOT NULL, storey VARCHAR(50) NOT NULL, charges VARCHAR(255) NOT NULL, availability_date DATETIME NOT NULL, note VARCHAR(255) DEFAULT NULL, rental_line TINYINT(1) NOT NULL, video VARCHAR(255) DEFAULT NULL, bail INT NOT NULL, monoproperty TINYINT(1) NOT NULL, indication_water_state TINYINT(1) NOT NULL, fiber TINYINT(1) NOT NULL, tnt TINYINT(1) NOT NULL, bale_tv TINYINT(1) NOT NULL, indicator_heater_state TINYINT(1) NOT NULL, batch_number INT NOT NULL, rentale_reference INT NOT NULL, provision_charges TINYINT(1) NOT NULL, adress VARCHAR(50) NOT NULL, green_house VARCHAR(1) NOT NULL, energy_performance_certificate VARCHAR(1) NOT NULL, posta_code VARCHAR(50) NOT NULL, city VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, telephone_number_show_off VARCHAR(50) NOT NULL, amout_insurrance_colocation VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property_file (id INT AUTO_INCREMENT NOT NULL, energy_performance_certificate VARCHAR(255) NOT NULL, diagnosis_electricity_and_gas VARCHAR(255) NOT NULL, diagnosis_lead VARCHAR(255) NOT NULL, condominium_rule VARCHAR(255) NOT NULL, inventory_first_view VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rental_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rentale (id INT AUTO_INCREMENT NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE signing (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tenant (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, birthday DATETIME NOT NULL, birth_place VARCHAR(50) NOT NULL, adress VARCHAR(50) NOT NULL, sex VARCHAR(50) NOT NULL, phone_number INT NOT NULL, mail_adress VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_card (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE undertake (id INT AUTO_INCREMENT NOT NULL, adding_date DATETIME NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE work (id INT AUTO_INCREMENT NOT NULL, quantity INT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE worker (id INT AUTO_INCREMENT NOT NULL, corporation_name VARCHAR(50) NOT NULL, company_number INT NOT NULL, trade_name VARCHAR(50) NOT NULL, postal_adress VARCHAR(100) NOT NULL, phone_number INT NOT NULL, mail_adress VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE accreditation');
        $this->addSql('DROP TABLE agreement');
        $this->addSql('DROP TABLE apply');
        $this->addSql('DROP TABLE burden_type');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE comment_property');
        $this->addSql('DROP TABLE construction');
        $this->addSql('DROP TABLE construction_period');
        $this->addSql('DROP TABLE construction_type');
        $this->addSql('DROP TABLE entity');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE profession');
        $this->addSql('DROP TABLE property');
        $this->addSql('DROP TABLE property_file');
        $this->addSql('DROP TABLE rental_type');
        $this->addSql('DROP TABLE rentale');
        $this->addSql('DROP TABLE signing');
        $this->addSql('DROP TABLE tenant');
        $this->addSql('DROP TABLE type_card');
        $this->addSql('DROP TABLE undertake');
        $this->addSql('DROP TABLE work');
        $this->addSql('DROP TABLE worker');
    }
}
