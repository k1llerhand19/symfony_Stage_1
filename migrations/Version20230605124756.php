<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230605124756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBC9C46828');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBA679884C');
        $this->addSql('CREATE TABLE cm (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(25) NOT NULL, support_processeur VARCHAR(25) NOT NULL, nbr_cpu_supporte INT NOT NULL, chipset VARCHAR(25) NOT NULL, type_memoire VARCHAR(25) NOT NULL, capa_maxi_ram_par_slot INT NOT NULL, capa_maxi_ram INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gpu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(25) NOT NULL, chipset_graphique VARCHAR(25) NOT NULL, taille_memoire INT NOT NULL, type_memoire VARCHAR(25) NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE carte_graphique');
        $this->addSql('DROP TABLE carte_mere');
        $this->addSql('ALTER TABLE boitier CHANGE marque marque VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE hdd CHANGE marque marque VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB1F086F51');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB2501D585');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB32A43482');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB89758D48');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBD568D8BE');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBE154EFAB');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBE2B334C8');
        $this->addSql('DROP INDEX IDX_8712E8DBA679884C ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBE2B334C8 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBD568D8BE ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB32A43482 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB89758D48 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB1F086F51 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB2501D585 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBC9C46828 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBE154EFAB ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD alim_id_id INT NOT NULL, ADD boitier_id_id INT NOT NULL, ADD cm_id_id INT NOT NULL, ADD gpu_id_id INT NOT NULL, ADD hdd_id_id INT NOT NULL, ADD processeur_id_id INT NOT NULL, ADD ram_id_id INT NOT NULL, ADD refroidissement_id_id INT NOT NULL, ADD ssd_id_id INT NOT NULL, DROP id_cm_id, DROP id_processeur_id, DROP id_alim_id, DROP id_hdd_id, DROP id_ssd_id, DROP id_refroidisseur_id, DROP id_ram_id, DROP id_cg_id, DROP id_boitier_id, DROP nom, DROP modele, DROP marque');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB6833055 FOREIGN KEY (alim_id_id) REFERENCES alimentation (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBB8A4DCFB FOREIGN KEY (boitier_id_id) REFERENCES boitier (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB9599867C FOREIGN KEY (cm_id_id) REFERENCES cm (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB88B545B7 FOREIGN KEY (gpu_id_id) REFERENCES gpu (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB6E5422CD FOREIGN KEY (hdd_id_id) REFERENCES hdd (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBF335463A FOREIGN KEY (processeur_id_id) REFERENCES processeur (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB8AC2A195 FOREIGN KEY (ram_id_id) REFERENCES ram (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBD687E078 FOREIGN KEY (refroidissement_id_id) REFERENCES refroidisseur (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB36BFC653 FOREIGN KEY (ssd_id_id) REFERENCES ssd (id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB6833055 ON ordinateur (alim_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBB8A4DCFB ON ordinateur (boitier_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB9599867C ON ordinateur (cm_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB88B545B7 ON ordinateur (gpu_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB6E5422CD ON ordinateur (hdd_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBF335463A ON ordinateur (processeur_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB8AC2A195 ON ordinateur (ram_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBD687E078 ON ordinateur (refroidissement_id_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB36BFC653 ON ordinateur (ssd_id_id)');
        $this->addSql('ALTER TABLE processeur CHANGE marque marque VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE ssd CHANGE marque marque VARCHAR(25) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB9599867C');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB88B545B7');
        $this->addSql('CREATE TABLE carte_graphique (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, chipset_graphique VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, taille_memoire INT NOT NULL, type_memoire VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE carte_mere (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, support_processeur VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nbr_cpu_supporte INT NOT NULL, chipset VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type_memoire VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, capa_maximale_ram_par_slot INT NOT NULL, capa_maximale_ram INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE cm');
        $this->addSql('DROP TABLE gpu');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB6833055');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBB8A4DCFB');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB6E5422CD');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBF335463A');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB8AC2A195');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBD687E078');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB36BFC653');
        $this->addSql('DROP INDEX IDX_8712E8DB6833055 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBB8A4DCFB ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB9599867C ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB88B545B7 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB6E5422CD ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBF335463A ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB8AC2A195 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DBD687E078 ON ordinateur');
        $this->addSql('DROP INDEX IDX_8712E8DB36BFC653 ON ordinateur');
        $this->addSql('ALTER TABLE ordinateur ADD id_cm_id INT NOT NULL, ADD id_processeur_id INT NOT NULL, ADD id_alim_id INT NOT NULL, ADD id_hdd_id INT NOT NULL, ADD id_ssd_id INT NOT NULL, ADD id_refroidisseur_id INT NOT NULL, ADD id_ram_id INT NOT NULL, ADD id_cg_id INT NOT NULL, ADD id_boitier_id INT NOT NULL, ADD nom VARCHAR(25) NOT NULL, ADD modele VARCHAR(25) NOT NULL, ADD marque VARCHAR(20) NOT NULL, DROP alim_id_id, DROP boitier_id_id, DROP cm_id_id, DROP gpu_id_id, DROP hdd_id_id, DROP processeur_id_id, DROP ram_id_id, DROP refroidissement_id_id, DROP ssd_id_id');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB1F086F51 FOREIGN KEY (id_refroidisseur_id) REFERENCES refroidisseur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB2501D585 FOREIGN KEY (id_ram_id) REFERENCES ram (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB32A43482 FOREIGN KEY (id_hdd_id) REFERENCES hdd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB89758D48 FOREIGN KEY (id_ssd_id) REFERENCES ssd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBA679884C FOREIGN KEY (id_cm_id) REFERENCES carte_mere (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBC9C46828 FOREIGN KEY (id_cg_id) REFERENCES carte_graphique (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBD568D8BE FOREIGN KEY (id_alim_id) REFERENCES alimentation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBE154EFAB FOREIGN KEY (id_boitier_id) REFERENCES boitier (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBE2B334C8 FOREIGN KEY (id_processeur_id) REFERENCES processeur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8712E8DBA679884C ON ordinateur (id_cm_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBE2B334C8 ON ordinateur (id_processeur_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBD568D8BE ON ordinateur (id_alim_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB32A43482 ON ordinateur (id_hdd_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB89758D48 ON ordinateur (id_ssd_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB1F086F51 ON ordinateur (id_refroidisseur_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DB2501D585 ON ordinateur (id_ram_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBC9C46828 ON ordinateur (id_cg_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBE154EFAB ON ordinateur (id_boitier_id)');
        $this->addSql('ALTER TABLE boitier CHANGE marque marque VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE processeur CHANGE marque marque VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE hdd CHANGE marque marque VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE ssd CHANGE marque marque VARCHAR(20) NOT NULL');
    }
}
