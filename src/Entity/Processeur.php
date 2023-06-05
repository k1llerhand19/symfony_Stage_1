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

    #[ORM\Column(length: 25)]
    private ?string $Marque = null;

    #[ORM\Column(length: 25)]
    private ?string $Support_processeur = null;

    #[ORM\Column]
    private ?float $Frequence_cpu = null;

    #[ORM\Column]
    private ?int $Nbr_threads = null;

    #[ORM\Column]
    private ?int $Nbr_core = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Processeur', targetEntity: Ordinateur::class)]
    private Collection $Processeur_Id;

    public function __construct()
    {
        $this->Processeur_Id = new ArrayCollection();
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
        return $this->Support_processeur;
    }

    public function setSupportProcesseur(string $Support_processeur): self
    {
        $this->Support_processeur = $Support_processeur;

        return $this;
    }

    public function getFrequenceCpu(): ?float
    {
        return $this->Frequence_cpu;
    }

    public function setFrequenceCpu(float $Frequence_cpu): self
    {
        $this->Frequence_cpu = $Frequence_cpu;

        return $this;
    }

    public function getNbrThreads(): ?int
    {
        return $this->Nbr_threads;
    }

    public function setNbrThreads(int $Nbr_threads): self
    {
        $this->Nbr_threads = $Nbr_threads;

        return $this;
    }

    public function getNbrCore(): ?int
    {
        return $this->Nbr_core;
    }

    public function setNbrCore(int $Nbr_core): self
    {
        $this->Nbr_core = $Nbr_core;

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
    public function getProcesseurId(): Collection
    {
        return $this->Processeur_Id;
    }

    public function addProcesseurId(Ordinateur $processeurId): self
    {
        if (!$this->Processeur_Id->contains($processeurId)) {
            $this->Processeur_Id->add($processeurId);
            $processeurId->setProcesseur($this);
        }

        return $this;
    }

    public function removeProcesseurId(Ordinateur $processeurId): self
    {
        if ($this->Processeur_Id->removeElement($processeurId)) {
            // set the owning side to null (unless already changed)
            if ($processeurId->getProcesseur() === $this) {
                $processeurId->setProcesseur(null);
            }
        }

        return $this;
    }

}
