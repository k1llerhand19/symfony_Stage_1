<?php

namespace App\Entity;

use App\Repository\ProcesseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProcesseurRepository::class)]
class Processeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $Nom = null;

    #[ORM\Column(length: 25)]
    private ?string $Modele = null;

    #[ORM\Column(length: 20)]
    private ?string $Marque = null;

    #[ORM\Column(length: 25)]
    private ?string $Support_Processeur = null;

    #[ORM\Column]
    private ?float $Frequence_CPU = null;

    #[ORM\Column]
    private ?int $Nbr_Core = null;

    #[ORM\Column]
    private ?int $Nbr_Threads = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_Processeur', targetEntity: Ordinateur::class)]
    private Collection $Id_Processeur;

    public function __construct()
    {
        $this->Id_Processeur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->Modele;
    }

    public function setModele(string $Modele): self
    {
        $this->Modele = $Modele;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getSupportProcesseur(): ?string
    {
        return $this->Support_Processeur;
    }

    public function setSupportProcesseur(string $Support_Processeur): self
    {
        $this->Support_Processeur = $Support_Processeur;

        return $this;
    }

    public function getFrequenceCPU(): ?float
    {
        return $this->Frequence_CPU;
    }

    public function setFrequenceCPU(float $Frequence_CPU): self
    {
        $this->Frequence_CPU = $Frequence_CPU;

        return $this;
    }

    public function getNbrCore(): ?int
    {
        return $this->Nbr_Core;
    }

    public function setNbrCore(int $Nbr_Core): self
    {
        $this->Nbr_Core = $Nbr_Core;

        return $this;
    }

    public function getNbrThreads(): ?int
    {
        return $this->Nbr_Threads;
    }

    public function setNbrThreads(int $Nbr_Threads): self
    {
        $this->Nbr_Threads = $Nbr_Threads;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(int $Stock): self
    {
        $this->Stock = $Stock;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getIdProcesseur(): Collection
    {
        return $this->Id_Processeur;
    }

    public function addIdProcesseur(Ordinateur $idProcesseur): self
    {
        if (!$this->Id_Processeur->contains($idProcesseur)) {
            $this->Id_Processeur->add($idProcesseur);
            $idProcesseur->setIdProcesseur($this);
        }

        return $this;
    }

    public function removeIdProcesseur(Ordinateur $idProcesseur): self
    {
        if ($this->Id_Processeur->removeElement($idProcesseur)) {
            // set the owning side to null (unless already changed)
            if ($idProcesseur->getIdProcesseur() === $this) {
                $idProcesseur->setIdProcesseur(null);
            }
        }

        return $this;
    }
}
