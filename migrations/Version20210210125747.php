<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210210125747 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE teclado_usuario (id INT AUTO_INCREMENT NOT NULL, teclado_id INT DEFAULT NULL, usuario_id INT DEFAULT NULL, INDEX IDX_346FE7BB4DF1FEB3 (teclado_id), INDEX IDX_346FE7BBDB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE teclado_usuario ADD CONSTRAINT FK_346FE7BB4DF1FEB3 FOREIGN KEY (teclado_id) REFERENCES teclado (id)');
        $this->addSql('ALTER TABLE teclado_usuario ADD CONSTRAINT FK_346FE7BBDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE teclado DROP FOREIGN KEY FK_E79983F4DB38439E');
        $this->addSql('DROP INDEX IDX_E79983F4DB38439E ON teclado');
        $this->addSql('ALTER TABLE teclado DROP usuario_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE teclado_usuario');
        $this->addSql('ALTER TABLE teclado ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE teclado ADD CONSTRAINT FK_E79983F4DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('CREATE INDEX IDX_E79983F4DB38439E ON teclado (usuario_id)');
    }
}
