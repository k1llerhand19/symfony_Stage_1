<?php

namespace App\Entity;

use App\Repository\CpuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CpuRepository::class)]
class Cpu
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

    #[ORM\Column(length: 25)]
    private ?string $support_processeur = null;

    #[ORM\Column]
    private ?float $frequence_cpu = null;

    #[ORM\Column]
    private ?int $nbr_core = null;

    #[ORM\Column]
    private ?int $nbr_threads = null;

    #[ORM\OneToMany(mappedBy: 'cpu', targetEntity: Ordinateur::class)]
    private Collection $Cpu_id;

    public function __construct()
    {
        $this->Cpu_id = new ArrayCollection();
    }

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

    public function getSupportProcesseur(): ?string
    {
        return $this->support_processeur;
    }

    public function setSupportProcesseur(string $support_processeur): self
    {
        $this->support_processeur = $support_processeur;

        return $this;
    }

    public function getFrequenceCpu(): ?float
    {
        return $this->frequence_cpu;
    }

    public function setFrequenceCpu(float $frequence_cpu): self
    {
        $this->frequence_cpu = $frequence_cpu;

        return $this;
    }

    public function getNbrCore(): ?int
    {
        return $this->nbr_core;
    }

    public function setNbrCore(int $nbr_core): self
    {
        $this->nbr_core = $nbr_core;

        return $this;
    }

    public function getNbrThreads(): ?int
    {
        return $this->nbr_threads;
    }

    public function setNbrThreads(int $nbr_threads): self
    {
        $this->nbr_threads = $nbr_threads;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getCpuId(): Collection
    {
        return $this->Cpu_id;
    }

    public function addCpuId(Ordinateur $cpuId): self
    {
        if (!$this->Cpu_id->contains($cpuId)) {
            $this->Cpu_id->add($cpuId);
            $cpuId->setCpu($this);
        }

        return $this;
    }

    public function removeCpuId(Ordinateur $cpuId): self
    {
        if ($this->Cpu_id->removeElement($cpuId)) {
            // set the owning side to null (unless already changed)
            if ($cpuId->getCpu() === $this) {
                $cpuId->setCpu(null);
            }
        }

        return $this;
    }
}
