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

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\Column(length: 20)]
    private ?string $type_memoire = null;

    #[ORM\Column]
    private ?int $frequence_memoire = null;

    #[ORM\Column]
    private ?int $capacite_par_barrette = null;

    #[ORM\OneToMany(mappedBy: 'ram', targetEntity: Ordinateur::class)]
    private Collection $ram_id;

    public function __construct()
    {
        $this->ram_id = new ArrayCollection();
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

    public function getTypeMemoire(): ?string
    {
        return $this->type_memoire;
    }

    public function setTypeMemoire(string $type_memoire): self
    {
        $this->type_memoire = $type_memoire;

        return $this;
    }

    public function getFrequenceMemoire(): ?int
    {
        return $this->frequence_memoire;
    }

    public function setFrequenceMemoire(int $frequence_memoire): self
    {
        $this->frequence_memoire = $frequence_memoire;

        return $this;
    }

    public function getCapaciteParBarrette(): ?int
    {
        return $this->capacite_par_barrette;
    }

    public function setCapaciteParBarrette(int $capacite_par_barrette): self
    {
        $this->capacite_par_barrette = $capacite_par_barrette;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getRamId(): Collection
    {
        return $this->ram_id;
    }

    public function addRamId(Ordinateur $ramId): self
    {
        if (!$this->ram_id->contains($ramId)) {
            $this->ram_id->add($ramId);
            $ramId->setRam($this);
        }

        return $this;
    }

    public function removeRamId(Ordinateur $ramId): self
    {
        if ($this->ram_id->removeElement($ramId)) {
            // set the owning side to null (unless already changed)
            if ($ramId->getRam() === $this) {
                $ramId->setRam(null);
            }
        }

        return $this;
    }
}
