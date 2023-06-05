<?php

namespace App\Entity;

use App\Repository\HDDRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HDDRepository::class)]
class HDD
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

    #[ORM\Column]
    private ?int $Capacite = null;

    #[ORM\Column]
    private ?int $Vitesse_Rotation = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_HDD', targetEntity: Ordinateur::class)]
    private Collection $Id_Alim;

    public function __construct()
    {
        $this->Id_Alim = new ArrayCollection();
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

    public function getCapacite(): ?int
    {
        return $this->Capacite;
    }

    public function setCapacite(int $Capacite): self
    {
        $this->Capacite = $Capacite;

        return $this;
    }

    public function getVitesseRotation(): ?int
    {
        return $this->Vitesse_Rotation;
    }

    public function setVitesseRotation(int $Vitesse_Rotation): self
    {
        $this->Vitesse_Rotation = $Vitesse_Rotation;

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
    public function getIdAlim(): Collection
    {
        return $this->Id_Alim;
    }

    public function addIdAlim(Ordinateur $idAlim): self
    {
        if (!$this->Id_Alim->contains($idAlim)) {
            $this->Id_Alim->add($idAlim);
            $idAlim->setIdHDD($this);
        }

        return $this;
    }

    public function removeIdAlim(Ordinateur $idAlim): self
    {
        if ($this->Id_Alim->removeElement($idAlim)) {
            // set the owning side to null (unless already changed)
            if ($idAlim->getIdHDD() === $this) {
                $idAlim->setIdHDD(null);
            }
        }

        return $this;
    }
}
