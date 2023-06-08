<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230608123230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB5C9BE5AD');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB48FCC97C');
        $this->addSql('CREATE TABLE cartemere (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, marque VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, support_cpu VARCHAR(60) NOT NULL, nbr_cpu_supporte INT NOT NULL, chipset VARCHAR(25) NOT NULL, type_memoire VARCHAR(25) NOT NULL, capa_maxi_ram_par_slot INT NOT NULL, capa_maxi_ram INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cpu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, marque VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, support_cpu VARCHAR(25) NOT NULL, frequence_cpu DOUBLE PRECISION NOT NULL, nbr_core INT NOT NULL, nbr_threads INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE processeur');
        $this->addSql('DROP TABLE cm');
        $this->addSql('ALTER TABLE boitier CHANGE nom nom VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE gpu CHANGE modele modele VARCHAR(25) NOT NULL, CHANGE chipset_graphique chipset_graphique VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB1493816F');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB3366068');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB44DE6F7C');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB98003202');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBAF4238A5');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBBF571CE');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBFC823A80');
        $this->addSql('DROP INDEX IDX_8712E8DB1493816F ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB3366068 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB44DE6F7C ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB48FCC97C ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB5C9BE5AD ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB98003202 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBAF4238A5 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBBF571CE ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBFC823A80 ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD alim_id_id INT NOT NULL, ADD nom VARCHAR(50) NOT NULL, ADD marque VARCHAR(25) NOT NULL, ADD modele VARCHAR(25) NOT NULL, DROP alim_id, DROP boitier_id, DROP cm_id, DROP gpu_id, DROP hdd_id, DROP processeur_id, DROP ram_id, DROP refroidisseur_id, DROP ssd_id');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB6833055 FOREIGN KEY (alim_id_id) REFERENCES alimentation (id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB6833055 ON ordinateur (alim_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE processeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, support_processeur VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, frequence_cpu DOUBLE PRECISION NOT NULL, nbr_core INT NOT NULL, nbr_threads INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cm (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, support_processeur VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nbr_cpu_supporte INT NOT NULL, chipset VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type_memoire VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, capa_maxi_ram_par_slot INT NOT NULL, capa_maxi_ram INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE cartemere');
        $this->addSql('DROP TABLE cpu');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB6833055');
        $this->addSql('DROP INDEX IDX_8712E8DB6833055 ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD boitier_id INT NOT NULL, ADD cm_id INT NOT NULL, ADD gpu_id INT NOT NULL, ADD hdd_id INT NOT NULL, ADD processeur_id INT NOT NULL, ADD ram_id INT NOT NULL, ADD refroidisseur_id INT NOT NULL, ADD ssd_id INT NOT NULL, DROP nom, DROP marque, DROP modele, CHANGE alim_id_id alim_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB1493816F FOREIGN KEY (hdd_id) REFERENCES hdd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB3366068 FOREIGN KEY (ram_id) REFERENCES ram (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB44DE6F7C FOREIGN KEY (boitier_id) REFERENCES boitier (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB48FCC97C FOREIGN KEY (cm_id) REFERENCES cm (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB5C9BE5AD FOREIGN KEY (processeur_id) REFERENCES processeur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB98003202 FOREIGN KEY (gpu_id) REFERENCES gpu (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBAF4238A5 FOREIGN KEY (ssd_id) REFERENCES ssd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBBF571CE FOREIGN KEY (alim_id) REFERENCES alimentation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBFC823A80 FOREIGN KEY (refroidisseur_id) REFERENCES refroidisseur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8712E8DB1493816F ON ordinateur (hdd_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB3366068 ON ordinateur (ram_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB44DE6F7C ON ordinateur (boitier_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB48FCC97C ON ordinateur (cm_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB5C9BE5AD ON ordinateur (processeur_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB98003202 ON ordinateur (gpu_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBAF4238A5 ON ordinateur (ssd_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBBF571CE ON ordinateur (alim_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBFC823A80 ON ordinateur (refroidisseur_id)');
        $this->addSql('ALTER TABLE boitier CHANGE nom nom VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE gpu CHANGE modele modele VARCHAR(50) NOT NULL, CHANGE chipset_graphique chipset_graphique VARCHAR(50) NOT NULL');
    }
}
