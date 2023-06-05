<?php

namespace App\Entity;

use App\Repository\CmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CmRepository::class)]
class Cm
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
    private ?int $Nbr_cpu_supporte = null;

    #[ORM\Column(length: 25)]
    private ?string $Chipset = null;

    #[ORM\Column(length: 25)]
    private ?string $Type_memoire = null;

    #[ORM\Column]
    private ?int $Capa_maxi_ram_par_slot = null;

    #[ORM\Column]
    private ?int $Capa_maxi_ram = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Cm', targetEntity: Ordinateur::class)]
    private Collection $Cm_Id;

    public function __construct()
    {
        $this->Cm_Id = new ArrayCollection();
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

    public function getNbrCpuSupporte(): ?int
    {
        return $this->Nbr_cpu_supporte;
    }

    public function setNbrCpuSupporte(int $Nbr_cpu_supporte): self
    {
        $this->Nbr_cpu_supporte = $Nbr_cpu_supporte;

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
        return $this->Type_memoire;
    }

    public function setTypeMemoire(string $Type_memoire): self
    {
        $this->Type_memoire = $Type_memoire;

        return $this;
    }

    public function getCapaMaxiRamParSlot(): ?int
    {
        return $this->Capa_maxi_ram_par_slot;
    }

    public function setCapaMaxiRamParSlot(int $Capa_maxi_ram_par_slot): self
    {
        $this->Capa_maxi_ram_par_slot = $Capa_maxi_ram_par_slot;

        return $this;
    }

    public function getCapaMaxiRam(): ?int
    {
        return $this->Capa_maxi_ram;
    }

    public function setCapaMaxiRam(int $Capa_maxi_ram): self
    {
        $this->Capa_maxi_ram = $Capa_maxi_ram;

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
    public function getCmId(): Collection
    {
        return $this->Cm_Id;
    }

    public function addCmId(Ordinateur $cmId): self
    {
        if (!$this->Cm_Id->contains($cmId)) {
            $this->Cm_Id->add($cmId);
            $cmId->setCm($this);
        }

        return $this;
    }

    public function removeCmId(Ordinateur $cmId): self
    {
        if ($this->Cm_Id->removeElement($cmId)) {
            // set the owning side to null (unless already changed)
            if ($cmId->getCm() === $this) {
                $cmId->setCm(null);
            }
        }

        return $this;
    }



}
