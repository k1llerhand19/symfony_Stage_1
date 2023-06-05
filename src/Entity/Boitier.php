<?php

namespace App\Entity;

use App\Repository\BoitierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoitierRepository::class)]
class Boitier
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

    #[ORM\Column(length: 20)]
    private ?string $Format_Boitier = null;

    #[ORM\Column(length: 20)]
    private ?string $Format_Alim = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_Boitier', targetEntity: Ordinateur::class)]
    private Collection $Id_Boitier;

    public function __construct()
    {
        $this->Id_Boitier = new ArrayCollection();
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

    public function getFormatBoitier(): ?string
    {
        return $this->Format_Boitier;
    }

    public function setFormatBoitier(string $Format_Boitier): self
    {
        $this->Format_Boitier = $Format_Boitier;

        return $this;
    }

    public function getFormatAlim(): ?string
    {
        return $this->Format_Alim;
    }

    public function setFormatAlim(string $Format_Alim): self
    {
        $this->Format_Alim = $Format_Alim;

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
    public function getIdBoitier(): Collection
    {
        return $this->Id_Boitier;
    }

    public function addIdBoitier(Ordinateur $idBoitier): self
    {
        if (!$this->Id_Boitier->contains($idBoitier)) {
            $this->Id_Boitier->add($idBoitier);
            $idBoitier->setIdBoitier($this);
        }

        return $this;
    }

    public function removeIdBoitier(Ordinateur $idBoitier): self
    {
        if ($this->Id_Boitier->removeElement($idBoitier)) {
            // set the owning side to null (unless already changed)
            if ($idBoitier->getIdBoitier() === $this) {
                $idBoitier->setIdBoitier(null);
            }
        }

        return $this;
    }
}
