<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230605125228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB36BFC653');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB6833055');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB6E5422CD');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB88B545B7');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB8AC2A195');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB9599867C');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBB8A4DCFB');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBD687E078');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBF335463A');
        $this->addSql('DROP INDEX IDX_8712E8DB6833055 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBB8A4DCFB ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB9599867C ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB88B545B7 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB6E5422CD ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBF335463A ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB8AC2A195 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBD687E078 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB36BFC653 ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD alim_id INT NOT NULL, DROP alim_id_id, DROP boitier_id_id, DROP cm_id_id, DROP gpu_id_id, DROP hdd_id_id, DROP processeur_id_id, DROP ram_id_id, DROP refroidissement_id_id, DROP ssd_id_id');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBBF571CE FOREIGN KEY (alim_id) REFERENCES alimentation (id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBBF571CE ON ordinateur (alim_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBBF571CE');
        $this->addSql('DROP INDEX IDX_8712E8DBBF571CE ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD boitier_id_id INT NOT NULL, ADD cm_id_id INT NOT NULL, ADD gpu_id_id INT NOT NULL, ADD hdd_id_id INT NOT NULL, ADD processeur_id_id INT NOT NULL, ADD ram_id_id INT NOT NULL, ADD refroidissement_id_id INT NOT NULL, ADD ssd_id_id INT NOT NULL, CHANGE alim_id alim_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB36BFC653 FOREIGN KEY (ssd_id_id) REFERENCES ssd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB6833055 FOREIGN KEY (alim_id_id) REFERENCES alimentation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB6E5422CD FOREIGN KEY (hdd_id_id) REFERENCES hdd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB88B545B7 FOREIGN KEY (gpu_id_id) REFERENCES gpu (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB8AC2A195 FOREIGN KEY (ram_id_id) REFERENCES ram (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB9599867C FOREIGN KEY (cm_id_id) REFERENCES cm (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBB8A4DCFB FOREIGN KEY (boitier_id_id) REFERENCES boitier (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBD687E078 FOREIGN KEY (refroidissement_id_id) REFERENCES refroidisseur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBF335463A FOREIGN KEY (processeur_id_id) REFERENCES processeur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8712E8DB6833055 ON ordinateur (alim_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBB8A4DCFB ON ordinateur (boitier_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB9599867C ON ordinateur (cm_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB88B545B7 ON ordinateur (gpu_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB6E5422CD ON ordinateur (hdd_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBF335463A ON ordinateur (processeur_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB8AC2A195 ON ordinateur (ram_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBD687E078 ON ordinateur (refroidissement_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB36BFC653 ON ordinateur (ssd_id_id)');
    }
}
