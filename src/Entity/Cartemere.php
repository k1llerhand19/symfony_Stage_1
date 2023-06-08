<?php

namespace App\Entity;

use App\Repository\CartemereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartemereRepository::class)]
class Cartemere
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
    private ?int $nbr_cpu_supporte = null;

    #[ORM\Column(length: 25)]
    private ?string $chipset = null;

    #[ORM\Column(length: 25)]
    private ?string $type_memoire = null;

    #[ORM\Column]
    private ?int $capacite_maximale_ram_par_slot = null;

    #[ORM\Column]
    private ?int $capacite_maximale_ram = null;

    #[ORM\OneToMany(mappedBy: 'carte_mere', targetEntity: Ordinateur::class)]
    private Collection $carte_mere_id;

    public function __construct()
    {
        $this->carte_mere_id = new ArrayCollection();
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

    public function getNbrCpuSupporte(): ?int
    {
        return $this->nbr_cpu_supporte;
    }

    public function setNbrCpuSupporte(int $nbr_cpu_supporte): self
    {
        $this->nbr_cpu_supporte = $nbr_cpu_supporte;

        return $this;
    }

    public function getChipset(): ?string
    {
        return $this->chipset;
    }

    public function setChipset(string $chipset): self
    {
        $this->chipset = $chipset;

        return $this;
    }

    public function getTypeMemoire(): ?string
    {
        return $this->type_memoire;
    }

    public function setTypeMemoire(string $type_memoire): self
    {
        $this->type_memoire = $type_memoire;

        return $this;
    }

    public function getCapaciteMaximaleRamParSlot(): ?int
    {
        return $this->capacite_maximale_ram_par_slot;
    }

    public function setCapaciteMaximaleRamParSlot(int $capacite_maximale_ram_par_slot): self
    {
        $this->capacite_maximale_ram_par_slot = $capacite_maximale_ram_par_slot;

        return $this;
    }

    public function getCapaciteMaximaleRam(): ?int
    {
        return $this->capacite_maximale_ram;
    }

    public function setCapaciteMaximaleRam(int $capacite_maximale_ram): self
    {
        $this->capacite_maximale_ram = $capacite_maximale_ram;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getCarteMereId(): Collection
    {
        return $this->carte_mere_id;
    }

    public function addCarteMereId(Ordinateur $carteMereId): self
    {
        if (!$this->carte_mere_id->contains($carteMereId)) {
            $this->carte_mere_id->add($carteMereId);
            $carteMereId->setCarteMere($this);
        }

        return $this;
    }

    public function removeCarteMereId(Ordinateur $carteMereId): self
    {
        if ($this->carte_mere_id->removeElement($carteMereId)) {
            // set the owning side to null (unless already changed)
            if ($carteMereId->getCarteMere() === $this) {
                $carteMereId->setCarteMere(null);
            }
        }

        return $this;
    }
}
