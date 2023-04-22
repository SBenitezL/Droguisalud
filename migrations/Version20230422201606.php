<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422201606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lote (id INT AUTO_INCREMENT NOT NULL, prd_codigo_id INT NOT NULL, lt_fecha_fabricacion DATE NOT NULL, lt_fecha_vencimiento DATE DEFAULT NULL, UNIQUE INDEX UNIQ_65B4329F3893742A (prd_codigo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producto (id INT AUTO_INCREMENT NOT NULL, prov_codigo_id INT NOT NULL, prd_nombre VARCHAR(255) NOT NULL, prd_unidad VARCHAR(255) NOT NULL, prd_precio DOUBLE PRECISION NOT NULL, prd_precio_unitario DOUBLE PRECISION DEFAULT NULL, prd_costo DOUBLE PRECISION NOT NULL, prd_iva DOUBLE PRECISION NOT NULL, prd_cantidad INT NOT NULL, UNIQUE INDEX UNIQ_A7BB0615842DC79 (prov_codigo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proveedor (id INT AUTO_INCREMENT NOT NULL, prov_nombre VARCHAR(255) NOT NULL, prov_direccion VARCHAR(255) NOT NULL, prov_telefono VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lote ADD CONSTRAINT FK_65B4329F3893742A FOREIGN KEY (prd_codigo_id) REFERENCES producto (id)');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB0615842DC79 FOREIGN KEY (prov_codigo_id) REFERENCES proveedor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lote DROP FOREIGN KEY FK_65B4329F3893742A');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB0615842DC79');
        $this->addSql('DROP TABLE lote');
        $this->addSql('DROP TABLE producto');
        $this->addSql('DROP TABLE proveedor');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
