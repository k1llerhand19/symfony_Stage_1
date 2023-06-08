<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230608134027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB1493816F');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB3366068');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB3917014');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB44DE6F7C');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB68162054');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB98003202');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBAF4238A5');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBBF571CE');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBFC823A80');
        $this->addSql('DROP TABLE ordinateur');
        $this->addSql('DROP TABLE cpu');
        $this->addSql('DROP TABLE boitier');
        $this->addSql('DROP TABLE refroidisseur');
        $this->addSql('DROP TABLE cartemere');
        $this->addSql('DROP TABLE gpu');
        $this->addSql('DROP TABLE ram');
        $this->addSql('ALTER TABLE alimentation DROP stock');
        $this->addSql('ALTER TABLE hdd DROP stock');
        $this->addSql('ALTER TABLE ssd DROP stock');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ordinateur (id INT AUTO_INCREMENT NOT NULL, alim_id INT NOT NULL, carte_mere_id INT NOT NULL, cpu_id INT NOT NULL, hdd_id INT NOT NULL, ssd_id INT NOT NULL, refroidisseur_id INT NOT NULL, ram_id INT NOT NULL, gpu_id INT NOT NULL, boitier_id INT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_8712E8DB1493816F (hdd_id), INDEX IDX_8712E8DB3366068 (ram_id), INDEX IDX_8712E8DB3917014 (cpu_id), INDEX IDX_8712E8DB44DE6F7C (boitier_id), INDEX IDX_8712E8DB68162054 (carte_mere_id), INDEX IDX_8712E8DB98003202 (gpu_id), INDEX IDX_8712E8DBAF4238A5 (ssd_id), INDEX IDX_8712E8DBBF571CE (alim_id), INDEX IDX_8712E8DBFC823A80 (refroidisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cpu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, support_cpu VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, frequence_cpu DOUBLE PRECISION NOT NULL, nbr_core INT NOT NULL, nbr_threads INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE boitier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, format_boitier VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, format_alim VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE refroidisseur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, support_processeur VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, vitesse_rota_mini INT NOT NULL, vitesse_rota_maxi INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cartemere (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, support_cpu VARCHAR(60) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nbr_cpu_supporte INT NOT NULL, chipset VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type_memoire VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, capa_maxi_ram_par_slot INT NOT NULL, capa_maxi_ram INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE gpu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, chipset_graphique VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, taille_memoire INT NOT NULL, type_memoire VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ram (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, modele VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type_memoire VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, frequence_memoire INT NOT NULL, capacite_par_barrette INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB1493816F FOREIGN KEY (hdd_id) REFERENCES hdd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB3366068 FOREIGN KEY (ram_id) REFERENCES ram (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB3917014 FOREIGN KEY (cpu_id) REFERENCES cpu (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB44DE6F7C FOREIGN KEY (boitier_id) REFERENCES boitier (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB68162054 FOREIGN KEY (carte_mere_id) REFERENCES cartemere (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB98003202 FOREIGN KEY (gpu_id) REFERENCES gpu (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBAF4238A5 FOREIGN KEY (ssd_id) REFERENCES ssd (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBBF571CE FOREIGN KEY (alim_id) REFERENCES alimentation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBFC823A80 FOREIGN KEY (refroidisseur_id) REFERENCES refroidisseur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE alimentation ADD stock INT NOT NULL');
        $this->addSql('ALTER TABLE ssd ADD stock INT NOT NULL');
        $this->addSql('ALTER TABLE hdd ADD stock INT NOT NULL');
    }
}
