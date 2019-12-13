<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191212152644 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category DROP doc_date, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE label label VARCHAR(50) NOT NULL, CHANGE file_name file_name VARCHAR(50) NOT NULL, CHANGE title title VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE doc ADD doc_date DATETIME NOT NULL, ADD doc VARCHAR(255) NOT NULL, DROP titre, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE files ADD filename VARCHAR(255) NOT NULL, DROP format, DROP size, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE last_logged_date last_logged_date DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD doc_date DATE DEFAULT NULL, CHANGE id id INT NOT NULL, CHANGE label label VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE file_name file_name VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE title title VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE doc ADD titre VARCHAR(256) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, DROP doc_date, DROP doc, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE files ADD format LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', ADD size DOUBLE PRECISION NOT NULL, DROP filename, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE last_logged_date last_logged_date DATETIME DEFAULT NULL');
    }
}
