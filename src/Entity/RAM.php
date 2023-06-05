<?php

namespace App\Entity;

use App\Repository\RamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RamRepository::class)]
class Ram
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

    #[ORM\Column(length: 15)]
    private ?string $Type_memoire = null;

    #[ORM\Column]
    private ?int $Frequence_memoire = null;

    #[ORM\Column]
    private ?int $Capacite_par_barrette = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Ram', targetEntity: Ordinateur::class)]
    private Collection $Ram_Id;

    public function __construct()
    {
        $this->Ram_Id = new ArrayCollection();
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

    public function getTypeMemoire(): ?string
    {
        return $this->Type_memoire;
    }

    public function setTypeMemoire(string $Type_memoire): self
    {
        $this->Type_memoire = $Type_memoire;

        return $this;
    }

    public function getFrequenceMemoire(): ?int
    {
        return $this->Frequence_memoire;
    }

    public function setFrequenceMemoire(int $Frequence_memoire): self
    {
        $this->Frequence_memoire = $Frequence_memoire;

        return $this;
    }

    public function getCapaciteParBarrette(): ?int
    {
        return $this->Capacite_par_barrette;
    }

    public function setCapaciteParBarrette(int $Capacite_par_barrette): self
    {
        $this->Capacite_par_barrette = $Capacite_par_barrette;

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
    public function getRamId(): Collection
    {
        return $this->Ram_Id;
    }

    public function addRamId(Ordinateur $ramId): self
    {
        if (!$this->Ram_Id->contains($ramId)) {
            $this->Ram_Id->add($ramId);
            $ramId->setRam($this);
        }

        return $this;
    }

    public function removeRamId(Ordinateur $ramId): self
    {
        if ($this->Ram_Id->removeElement($ramId)) {
            // set the owning side to null (unless already changed)
            if ($ramId->getRam() === $this) {
                $ramId->setRam(null);
            }
        }

        return $this;
    }

}
