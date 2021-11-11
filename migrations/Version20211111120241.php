<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211111120241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE title (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job ADD tille VARCHAR(255) NOT NULL, ADD company VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, ADD isactivated TINYINT(1) NOT NULL, ADD expriesal DATETIME NOT NULL, DROP nom, DROP prenom, DROP adr, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE title');
        $this->addSql('ALTER TABLE job MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE job DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE job ADD nom INT NOT NULL, ADD prenom INT NOT NULL, ADD adr INT NOT NULL, DROP tille, DROP company, DROP description, DROP isactivated, DROP expriesal, CHANGE id id INT NOT NULL');
    }
}
