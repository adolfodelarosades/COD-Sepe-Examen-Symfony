<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210922174548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE curso (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, duracion INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estudiante (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nota (id INT AUTO_INCREMENT NOT NULL, estudiante_id_id INT NOT NULL, curso_id_id INT NOT NULL, nota NUMERIC(10, 0) NOT NULL, INDEX IDX_C8D03E0DF3F9BD2A (estudiante_id_id), INDEX IDX_C8D03E0D771B9D4D (curso_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nota ADD CONSTRAINT FK_C8D03E0DF3F9BD2A FOREIGN KEY (estudiante_id_id) REFERENCES estudiante (id)');
        $this->addSql('ALTER TABLE nota ADD CONSTRAINT FK_C8D03E0D771B9D4D FOREIGN KEY (curso_id_id) REFERENCES curso (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE nota DROP FOREIGN KEY FK_C8D03E0D771B9D4D');
        $this->addSql('ALTER TABLE nota DROP FOREIGN KEY FK_C8D03E0DF3F9BD2A');
        $this->addSql('DROP TABLE curso');
        $this->addSql('DROP TABLE estudiante');
        $this->addSql('DROP TABLE nota');
    }
}
