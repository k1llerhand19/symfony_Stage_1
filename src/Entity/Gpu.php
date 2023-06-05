<?php

namespace App\Entity;

use App\Repository\GpuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GpuRepository::class)]
class Gpu
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
    private ?string $Chipset_graphique = null;

    #[ORM\Column]
    private ?int $Taille_memoire = null;

    #[ORM\Column(length: 25)]
    private ?string $Type_memoire = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Gpu', targetEntity: Ordinateur::class)]
    private Collection $Gpu_Id;

    public function __construct()
    {
        $this->Gpu_Id = new ArrayCollection();
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

    public function getChipsetGraphique(): ?string
    {
        return $this->Chipset_graphique;
    }

    public function setChipsetGraphique(string $Chipset_graphique): self
    {
        $this->Chipset_graphique = $Chipset_graphique;

        return $this;
    }

    public function getTailleMemoire(): ?int
    {
        return $this->Taille_memoire;
    }

    public function setTailleMemoire(int $Taille_memoire): self
    {
        $this->Taille_memoire = $Taille_memoire;

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
    public function getGpuId(): Collection
    {
        return $this->Gpu_Id;
    }

    public function addGpuId(Ordinateur $gpuId): self
    {
        if (!$this->Gpu_Id->contains($gpuId)) {
            $this->Gpu_Id->add($gpuId);
            $gpuId->setGpu($this);
        }

        return $this;
    }

    public function removeGpuId(Ordinateur $gpuId): self
    {
        if ($this->Gpu_Id->removeElement($gpuId)) {
            // set the owning side to null (unless already changed)
            if ($gpuId->getGpu() === $this) {
                $gpuId->setGpu(null);
            }
        }

        return $this;
    }

}
