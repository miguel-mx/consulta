<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220219002213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consulta DROP INDEX UNIQ_A6FE3FDE1D613A98, ADD INDEX IDX_A6FE3FDE1D613A98 (voto_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consulta DROP INDEX IDX_A6FE3FDE1D613A98, ADD UNIQUE INDEX UNIQ_A6FE3FDE1D613A98 (voto_id)');
    }
}
