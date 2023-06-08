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
    private ?string $marque = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\ManyToOne(inversedBy: 'alim_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?alimentation $alim = null;

    #[ORM\ManyToOne(inversedBy: 'carte_mere_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?cartemere $carte_mere = null;

    #[ORM\ManyToOne(inversedBy: 'cpu_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?cpu $cpu = null;

    #[ORM\ManyToOne(inversedBy: 'hdd_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?hdd $hdd = null;

    #[ORM\ManyToOne(inversedBy: 'ssd_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ssd $ssd = null;

    #[ORM\ManyToOne(inversedBy: 'refroidisseur_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?refroidisseur $refroidisseur = null;

    #[ORM\ManyToOne(inversedBy: 'ram_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ram $ram = null;

    #[ORM\ManyToOne(inversedBy: 'gpu_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?gpu $gpu = null;

    #[ORM\ManyToOne(inversedBy: 'boitier_id')]
    #[ORM\JoinColumn(nullable: false)]
    private ?boitier $boitier = null;

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

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

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

    public function getAlim(): ?alimentation
    {
        return $this->alim;
    }

    public function setAlim(?alimentation $alim): self
    {
        $this->alim = $alim;

        return $this;
    }

    public function getCarteMere(): ?cartemere
    {
        return $this->carte_mere;
    }

    public function setCarteMere(?cartemere $carte_mere): self
    {
        $this->carte_mere = $carte_mere;

        return $this;
    }

    public function getCpu(): ?cpu
    {
        return $this->cpu;
    }

    public function setCpu(?cpu $cpu): self
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getHdd(): ?hdd
    {
        return $this->hdd;
    }

    public function setHdd(?hdd $hdd): self
    {
        $this->hdd = $hdd;

        return $this;
    }

    public function getSsd(): ?ssd
    {
        return $this->ssd;
    }

    public function setSsd(?ssd $ssd): self
    {
        $this->ssd = $ssd;

        return $this;
    }

    public function getRefroidisseur(): ?refroidisseur
    {
        return $this->refroidisseur;
    }

    public function setRefroidisseur(?refroidisseur $refroidisseur): self
    {
        $this->refroidisseur = $refroidisseur;

        return $this;
    }

    public function getRam(): ?ram
    {
        return $this->ram;
    }

    public function setRam(?ram $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getGpu(): ?gpu
    {
        return $this->gpu;
    }

    public function setGpu(?gpu $gpu): self
    {
        $this->gpu = $gpu;

        return $this;
    }

    public function getBoitier(): ?boitier
    {
        return $this->boitier;
    }

    public function setBoitier(?boitier $boitier): self
    {
        $this->boitier = $boitier;

        return $this;
    }
}
