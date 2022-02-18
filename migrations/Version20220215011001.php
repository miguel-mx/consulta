<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220215011001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consulta ADD voto_id INT DEFAULT NULL, DROP voto');
        $this->addSql('ALTER TABLE consulta ADD CONSTRAINT FK_A6FE3FDE1D613A98 FOREIGN KEY (voto_id) REFERENCES elegible (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A6FE3FDE1D613A98 ON consulta (voto_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consulta DROP FOREIGN KEY FK_A6FE3FDE1D613A98');
        $this->addSql('DROP INDEX UNIQ_A6FE3FDE1D613A98 ON consulta');
        $this->addSql('ALTER TABLE consulta ADD voto VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP voto_id, CHANGE nombre nombre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE apellido apellido VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE token token VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE slug slug VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE elegible CHANGE nombre nombre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adscripcion adscripcion VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nombramiento nombramiento VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE area area VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE url url VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
