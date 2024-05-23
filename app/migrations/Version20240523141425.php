<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240523141425 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE test_entity_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE boutique_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE boutique_entity (id INT NOT NULL, nom VARCHAR(50) NOT NULL, adresse VARCHAR(50) DEFAULT NULL, codepostal VARCHAR(10) DEFAULT NULL, ville VARCHAR(40) NOT NULL, photo VARCHAR(100) DEFAULT NULL, latitude INT DEFAULT NULL, longitude INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE test_entity');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE boutique_entity_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE test_entity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE test_entity (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE boutique_entity');
    }
}
