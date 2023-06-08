<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230608123943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB6833055');
        $this->addSql('DROP INDEX IDX_8712E8DB6833055 ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD carte_mere_id INT NOT NULL, ADD cpu_id INT NOT NULL, ADD hdd_id INT NOT NULL, ADD ssd_id INT NOT NULL, ADD refroidisseur_id INT NOT NULL, ADD ram_id INT NOT NULL, ADD gpu_id INT NOT NULL, ADD boitier_id INT NOT NULL, CHANGE alim_id_id alim_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBBF571CE FOREIGN KEY (alim_id) REFERENCES alimentation (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB68162054 FOREIGN KEY (carte_mere_id) REFERENCES cartemere (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB3917014 FOREIGN KEY (cpu_id) REFERENCES cpu (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB1493816F FOREIGN KEY (hdd_id) REFERENCES hdd (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBAF4238A5 FOREIGN KEY (ssd_id) REFERENCES ssd (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBFC823A80 FOREIGN KEY (refroidisseur_id) REFERENCES refroidisseur (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB3366068 FOREIGN KEY (ram_id) REFERENCES ram (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB98003202 FOREIGN KEY (gpu_id) REFERENCES gpu (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB44DE6F7C FOREIGN KEY (boitier_id) REFERENCES boitier (id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBBF571CE ON ordinateur (alim_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB68162054 ON ordinateur (carte_mere_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB3917014 ON ordinateur (cpu_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB1493816F ON ordinateur (hdd_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBAF4238A5 ON ordinateur (ssd_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBFC823A80 ON ordinateur (refroidisseur_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB3366068 ON ordinateur (ram_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB98003202 ON ordinateur (gpu_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB44DE6F7C ON ordinateur (boitier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBBF571CE');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB68162054');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB3917014');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB1493816F');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBAF4238A5');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBFC823A80');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB3366068');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB98003202');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB44DE6F7C');
        $this->addSql('DROP INDEX IDX_8712E8DBBF571CE ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB68162054 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB3917014 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB1493816F ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBAF4238A5 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBFC823A80 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB3366068 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB98003202 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB44DE6F7C ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD alim_id_id INT NOT NULL, DROP alim_id, DROP carte_mere_id, DROP cpu_id, DROP hdd_id, DROP ssd_id, DROP refroidisseur_id, DROP ram_id, DROP gpu_id, DROP boitier_id');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB6833055 FOREIGN KEY (alim_id_id) REFERENCES alimentation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8712E8DB6833055 ON ordinateur (alim_id_id)');
    }
}
