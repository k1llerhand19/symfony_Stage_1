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

    #[ORM\ManyToOne(inversedBy: 'Alim_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Alimentation $Alim = null;

    #[ORM\ManyToOne(inversedBy: 'Boitier_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Boitier $Boitier = null;

    #[ORM\ManyToOne(inversedBy: 'Cm_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cm $Cm = null;

    #[ORM\ManyToOne(inversedBy: 'Gpu_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gpu $Gpu = null;

    #[ORM\ManyToOne(inversedBy: 'Hdd_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hdd $Hdd = null;

    #[ORM\ManyToOne(inversedBy: 'Processeur_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Processeur $Processeur = null;

    #[ORM\ManyToOne(inversedBy: 'Ram_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ram $Ram = null;

    #[ORM\ManyToOne(inversedBy: 'Refroidisseur_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Refroidisseur $Refroidisseur = null;

    #[ORM\ManyToOne(inversedBy: 'Ssd_Id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ssd $Ssd = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAlim(): ?Alimentation
    {
        return $this->Alim;
    }

    public function setAlim(?Alimentation $Alim): self
    {
        $this->Alim = $Alim;

        return $this;
    }

    public function getBoitier(): ?Boitier
    {
        return $this->Boitier;
    }

    public function setBoitier(?Boitier $Boitier): self
    {
        $this->Boitier = $Boitier;

        return $this;
    }

    public function getCm(): ?Cm
    {
        return $this->Cm;
    }

    public function setCm(?Cm $Cm): self
    {
        $this->Cm = $Cm;

        return $this;
    }

    public function getGpu(): ?Gpu
    {
        return $this->Gpu;
    }

    public function setGpu(?Gpu $Gpu): self
    {
        $this->Gpu = $Gpu;

        return $this;
    }

    public function getHdd(): ?Hdd
    {
        return $this->Hdd;
    }

    public function setHdd(?Hdd $Hdd): self
    {
        $this->Hdd = $Hdd;

        return $this;
    }

    public function getProcesseur(): ?Processeur
    {
        return $this->Processeur;
    }

    public function setProcesseur(?Processeur $Processeur): self
    {
        $this->Processeur = $Processeur;

        return $this;
    }

    public function getRam(): ?Ram
    {
        return $this->Ram;
    }

    public function setRam(?Ram $Ram): self
    {
        $this->Ram = $Ram;

        return $this;
    }

    public function getRefroidisseur(): ?Refroidisseur
    {
        return $this->Refroidisseur;
    }

    public function setRefroidisseur(?Refroidisseur $Refroidisseur): self
    {
        $this->Refroidisseur = $Refroidisseur;

        return $this;
    }

    public function getSsd(): ?Ssd
    {
        return $this->Ssd;
    }

    public function setSsd(?Ssd $Ssd): self
    {
        $this->Ssd = $Ssd;

        return $this;
    }
}
