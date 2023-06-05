<?php

namespace App\Entity;

use App\Repository\CarteMereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarteMereRepository::class)]
class CarteMere
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
    private ?int $Nbr_CPU_Supporte = null;

    #[ORM\Column(length: 25)]
    private ?string $Chipset = null;

    #[ORM\Column(length: 25)]
    private ?string $Type_Memoire = null;

    #[ORM\Column]
    private ?int $Capa_Maximale_RAM_Par_Slot = null;

    #[ORM\Column]
    private ?int $Capa_Maximale_RAM = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_CM', targetEntity: Ordinateur::class)]
    private Collection $Id_CM;

    public function __construct()
    {
        $this->Id_CM = new ArrayCollection();
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

    public function getNbrCPUSupporte(): ?int
    {
        return $this->Nbr_CPU_Supporte;
    }

    public function setNbrCPUSupporte(int $Nbr_CPU_Supporte): self
    {
        $this->Nbr_CPU_Supporte = $Nbr_CPU_Supporte;

        return $this;
    }

    public function getChipset(): ?string
    {
        return $this->Chipset;
    }

    public function setChipset(string $Chipset): self
    {
        $this->Chipset = $Chipset;

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

    public function getCapaMaximaleRAMParSlot(): ?int
    {
        return $this->Capa_Maximale_RAM_Par_Slot;
    }

    public function setCapaMaximaleRAMParSlot(int $Capa_Maximale_RAM_Par_Slot): self
    {
        $this->Capa_Maximale_RAM_Par_Slot = $Capa_Maximale_RAM_Par_Slot;

        return $this;
    }

    public function getCapaMaximaleRAM(): ?int
    {
        return $this->Capa_Maximale_RAM;
    }

    public function setCapaMaximaleRAM(int $Capa_Maximale_RAM): self
    {
        $this->Capa_Maximale_RAM = $Capa_Maximale_RAM;

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
    public function getIdCM(): Collection
    {
        return $this->Id_CM;
    }

    public function addIdCM(Ordinateur $idCM): self
    {
        if (!$this->Id_CM->contains($idCM)) {
            $this->Id_CM->add($idCM);
            $idCM->setIdCM($this);
        }

        return $this;
    }

    public function removeIdCM(Ordinateur $idCM): self
    {
        if ($this->Id_CM->removeElement($idCM)) {
            // set the owning side to null (unless already changed)
            if ($idCM->getIdCM() === $this) {
                $idCM->setIdCM(null);
            }
        }

        return $this;
    }
}
