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

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\Column(length: 25)]
    private ?string $chipset_graphique = null;

    #[ORM\Column]
    private ?int $taille_memoire = null;

    #[ORM\Column(length: 25)]
    private ?string $type_memoire = null;

    #[ORM\OneToMany(mappedBy: 'gpu', targetEntity: Ordinateur::class)]
    private Collection $gpu_id;

    public function __construct()
    {
        $this->gpu_id = new ArrayCollection();
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

    public function getChipsetGraphique(): ?string
    {
        return $this->chipset_graphique;
    }

    public function setChipsetGraphique(string $chipset_graphique): self
    {
        $this->chipset_graphique = $chipset_graphique;

        return $this;
    }

    public function getTailleMemoire(): ?int
    {
        return $this->taille_memoire;
    }

    public function setTailleMemoire(int $taille_memoire): self
    {
        $this->taille_memoire = $taille_memoire;

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

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getGpuId(): Collection
    {
        return $this->gpu_id;
    }

    public function addGpuId(Ordinateur $gpuId): self
    {
        if (!$this->gpu_id->contains($gpuId)) {
            $this->gpu_id->add($gpuId);
            $gpuId->setGpu($this);
        }

        return $this;
    }

    public function removeGpuId(Ordinateur $gpuId): self
    {
        if ($this->gpu_id->removeElement($gpuId)) {
            // set the owning side to null (unless already changed)
            if ($gpuId->getGpu() === $this) {
                $gpuId->setGpu(null);
            }
        }

        return $this;
    }
}
