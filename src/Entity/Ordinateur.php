<?php

namespace App\Entity;

use App\Repository\OrdinateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdinateurRepository::class)]
class Ordinateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'alim_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Alimentation $alim = null;

    #[ORM\ManyToOne(inversedBy: 'boitier_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Boitier $boitier = null;

    #[ORM\ManyToOne(inversedBy: 'cm_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cm $cm = null;

    #[ORM\ManyToOne(inversedBy: 'gpu_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gpu $gpu = null;

    #[ORM\ManyToOne(inversedBy: 'hdd_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hdd $hdd = null;

    #[ORM\ManyToOne(inversedBy: 'processeur_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Processeur $processeur = null;

    #[ORM\ManyToOne(inversedBy: 'ram_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ram $ram = null;

    #[ORM\ManyToOne(inversedBy: 'refroidisseur_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Refroidisseur $refroidisseur = null;

    #[ORM\ManyToOne(inversedBy: 'ssd_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ssd $ssd = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAlim(): ?Alimentation
    {
        return $this->alim;
    }

    public function setAlim(?Alimentation $alim): self
    {
        $this->alim = $alim;

        return $this;
    }

    public function getBoitier(): ?Boitier
    {
        return $this->boitier;
    }

    public function setBoitier(?Boitier $boitier): self
    {
        $this->boitier = $boitier;

        return $this;
    }

    public function getCm(): ?Cm
    {
        return $this->cm;
    }

    public function setCm(?Cm $cm): self
    {
        $this->cm = $cm;

        return $this;
    }

    public function getGpu(): ?Gpu
    {
        return $this->gpu;
    }

    public function setGpu(?Gpu $gpu): self
    {
        $this->gpu = $gpu;

        return $this;
    }

    public function getHdd(): ?Hdd
    {
        return $this->hdd;
    }

    public function setHdd(?Hdd $hdd): self
    {
        $this->hdd = $hdd;

        return $this;
    }

    public function getProcesseur(): ?Processeur
    {
        return $this->processeur;
    }

    public function setProcesseur(?Processeur $processeur): self
    {
        $this->processeur = $processeur;

        return $this;
    }

    public function getRam(): ?Ram
    {
        return $this->ram;
    }

    public function setRam(?Ram $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getRefroidisseur(): ?Refroidisseur
    {
        return $this->refroidisseur;
    }

    public function setRefroidisseur(?Refroidisseur $refroidisseur): self
    {
        $this->refroidisseur = $refroidisseur;

        return $this;
    }

    public function getSsd(): ?Ssd
    {
        return $this->ssd;
    }

    public function setSsd(?Ssd $ssd): self
    {
        $this->ssd = $ssd;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
