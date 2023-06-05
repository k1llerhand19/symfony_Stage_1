<?php

namespace App\Entity;

use App\Repository\RAMRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RAMRepository::class)]
class RAM
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
    private ?string $Type_Memoire = null;

    #[ORM\Column]
    private ?int $Frequence_Memoire = null;

    #[ORM\Column]
    private ?int $Capacite_Par_Barrette = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_RAM', targetEntity: Ordinateur::class)]
    private Collection $Id_RAM;

    public function __construct()
    {
        $this->Id_RAM = new ArrayCollection();
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
        return $this->Type_Memoire;
    }

    public function setTypeMemoire(string $Type_Memoire): self
    {
        $this->Type_Memoire = $Type_Memoire;

        return $this;
    }

    public function getFrequenceMemoire(): ?int
    {
        return $this->Frequence_Memoire;
    }

    public function setFrequenceMemoire(int $Frequence_Memoire): self
    {
        $this->Frequence_Memoire = $Frequence_Memoire;

        return $this;
    }

    public function getCapaciteParBarrette(): ?int
    {
        return $this->Capacite_Par_Barrette;
    }

    public function setCapaciteParBarrette(int $Capacite_Par_Barrette): self
    {
        $this->Capacite_Par_Barrette = $Capacite_Par_Barrette;

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
    public function getIdRAM(): Collection
    {
        return $this->Id_RAM;
    }

    public function addIdRAM(Ordinateur $idRAM): self
    {
        if (!$this->Id_RAM->contains($idRAM)) {
            $this->Id_RAM->add($idRAM);
            $idRAM->setIdRAM($this);
        }

        return $this;
    }

    public function removeIdRAM(Ordinateur $idRAM): self
    {
        if ($this->Id_RAM->removeElement($idRAM)) {
            // set the owning side to null (unless already changed)
            if ($idRAM->getIdRAM() === $this) {
                $idRAM->setIdRAM(null);
            }
        }

        return $this;
    }
}
