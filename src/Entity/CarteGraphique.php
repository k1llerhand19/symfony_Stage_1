<?php

namespace App\Entity;

use App\Repository\CarteGraphiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarteGraphiqueRepository::class)]
class CarteGraphique
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
    private ?string $Chipset_Graphique = null;

    #[ORM\Column]
    private ?int $Taille_Memoire = null;

    #[ORM\Column(length: 25)]
    private ?string $Type_Memoire = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_CG', targetEntity: Ordinateur::class)]
    private Collection $Id_CG;

    public function __construct()
    {
        $this->Id_CG = new ArrayCollection();
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
        return $this->Chipset_Graphique;
    }

    public function setChipsetGraphique(string $Chipset_Graphique): self
    {
        $this->Chipset_Graphique = $Chipset_Graphique;

        return $this;
    }

    public function getTailleMemoire(): ?int
    {
        return $this->Taille_Memoire;
    }

    public function setTailleMemoire(int $Taille_Memoire): self
    {
        $this->Taille_Memoire = $Taille_Memoire;

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
    public function getIdCG(): Collection
    {
        return $this->Id_CG;
    }

    public function addIdCG(Ordinateur $idCG): self
    {
        if (!$this->Id_CG->contains($idCG)) {
            $this->Id_CG->add($idCG);
            $idCG->setIdCG($this);
        }

        return $this;
    }

    public function removeIdCG(Ordinateur $idCG): self
    {
        if ($this->Id_CG->removeElement($idCG)) {
            // set the owning side to null (unless already changed)
            if ($idCG->getIdCG() === $this) {
                $idCG->setIdCG(null);
            }
        }

        return $this;
    }
}
