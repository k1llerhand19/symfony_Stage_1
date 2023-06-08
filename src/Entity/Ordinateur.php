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

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\ManyToOne(inversedBy: 'alim_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Alimentation $alimentaion = null;

    #[ORM\ManyToOne(inversedBy: 'boitier_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Boitier $boitier = null;

    #[ORM\ManyToOne(inversedBy: 'carte_mere_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cartemere $carte_mere = null;

    #[ORM\ManyToOne(inversedBy: 'Cpu_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cpu $cpu = null;

    #[ORM\ManyToOne(inversedBy: 'gpu_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gpu $gpu = null;

    #[ORM\ManyToOne(inversedBy: 'hdd_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hdd $hdd = null;

    #[ORM\ManyToOne(inversedBy: 'ram_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ram $ram = null;

    #[ORM\ManyToOne(inversedBy: 'refroidisseur_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Refroidisseur $refroidisseur = null;

    #[ORM\ManyToOne(inversedBy: 'ssd_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ssd $ssd = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAlimentaion(): ?Alimentation
    {
        return $this->alimentaion;
    }

    public function setAlimentaion(?Alimentation $alimentaion): self
    {
        $this->alimentaion = $alimentaion;

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

    public function getCarteMere(): ?Cartemere
    {
        return $this->carte_mere;
    }

    public function setCarteMere(?Cartemere $carte_mere): self
    {
        $this->carte_mere = $carte_mere;

        return $this;
    }

    public function getCpu(): ?Cpu
    {
        return $this->cpu;
    }

    public function setCpu(?Cpu $cpu): self
    {
        $this->cpu = $cpu;

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
}
