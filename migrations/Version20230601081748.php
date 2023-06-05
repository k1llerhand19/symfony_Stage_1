<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230601081748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alimentation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(25) NOT NULL, puissance INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE boitier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, format_boitier VARCHAR(20) NOT NULL, format_alim VARCHAR(20) NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carte_graphique (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, chipset_graphique VARCHAR(25) NOT NULL, taille_memoire INT NOT NULL, type_memoire VARCHAR(25) NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carte_mere (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, support_processeur VARCHAR(25) NOT NULL, nbr_cpu_supporte INT NOT NULL, chipset VARCHAR(25) NOT NULL, type_memoire VARCHAR(25) NOT NULL, capa_maximale_ram_par_slot INT NOT NULL, capa_maximale_ram INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hdd (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, capacite INT NOT NULL, vitesse_rotation INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordinateur (id INT AUTO_INCREMENT NOT NULL, id_cm_id INT NOT NULL, id_processeur_id INT NOT NULL, id_alim_id INT NOT NULL, id_hdd_id INT NOT NULL, id_ssd_id INT NOT NULL, id_refroidisseur_id INT NOT NULL, id_ram_id INT NOT NULL, id_cg_id INT NOT NULL, id_boitier_id INT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, INDEX IDX_8712E8DBA679884C (id_cm_id), INDEX IDX_8712E8DBE2B334C8 (id_processeur_id), INDEX IDX_8712E8DBD568D8BE (id_alim_id), INDEX IDX_8712E8DB32A43482 (id_hdd_id), INDEX IDX_8712E8DB89758D48 (id_ssd_id), INDEX IDX_8712E8DB1F086F51 (id_refroidisseur_id), INDEX IDX_8712E8DB2501D585 (id_ram_id), INDEX IDX_8712E8DBC9C46828 (id_cg_id), INDEX IDX_8712E8DBE154EFAB (id_boitier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE processeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, support_processeur VARCHAR(25) NOT NULL, frequence_cpu DOUBLE PRECISION NOT NULL, nbr_core INT NOT NULL, nbr_threads INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ram (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(25) NOT NULL, type_memoire VARCHAR(15) NOT NULL, frequence_memoire INT NOT NULL, capacite_par_barrette INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE refroidisseur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(25) NOT NULL, support_processeur VARCHAR(15) NOT NULL, vitesse_rota_mini INT NOT NULL, vitesse_rota_maxi INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ssd (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, modele VARCHAR(25) NOT NULL, marque VARCHAR(20) NOT NULL, capacite INT NOT NULL, vitesse_lecture INT NOT NULL, vitesse_ecriture INT NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBA679884C FOREIGN KEY (id_cm_id) REFERENCES carte_mere (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBE2B334C8 FOREIGN KEY (id_processeur_id) REFERENCES processeur (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBD568D8BE FOREIGN KEY (id_alim_id) REFERENCES alimentation (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB32A43482 FOREIGN KEY (id_hdd_id) REFERENCES hdd (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB89758D48 FOREIGN KEY (id_ssd_id) REFERENCES ssd (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB1F086F51 FOREIGN KEY (id_refroidisseur_id) REFERENCES refroidisseur (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB2501D585 FOREIGN KEY (id_ram_id) REFERENCES ram (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBC9C46828 FOREIGN KEY (id_cg_id) REFERENCES carte_graphique (id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBE154EFAB FOREIGN KEY (id_boitier_id) REFERENCES boitier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBA679884C');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBE2B334C8');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBD568D8BE');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB32A43482');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB89758D48');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB1F086F51');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DB2501D585');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBC9C46828');
        $this->addSql('ALTER TABLE ordinateur DROP FOREIGN KEY FK_8712E8DBE154EFAB');
        $this->addSql('DROP TABLE alimentation');
        $this->addSql('DROP TABLE boitier');
        $this->addSql('DROP TABLE carte_graphique');
        $this->addSql('DROP TABLE carte_mere');
        $this->addSql('DROP TABLE hdd');
        $this->addSql('DROP TABLE ordinateur');
        $this->addSql('DROP TABLE processeur');
        $this->addSql('DROP TABLE ram');
        $this->addSql('DROP TABLE refroidisseur');
        $this->addSql('DROP TABLE ssd');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
