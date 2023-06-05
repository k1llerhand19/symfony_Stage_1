<?php

namespace App\Entity;

use App\Repository\RefroidisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RefroidisseurRepository::class)]
class Refroidisseur
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
    private ?string $Support_Processeur = null;

    #[ORM\Column]
    private ?int $Vitesse_Rota_Mini = null;

    #[ORM\Column]
    private ?int $Vitesse_Rota_Maxi = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_Refroidisseur', targetEntity: Ordinateur::class)]
    private Collection $Id_Refroidisseur;

    public function __construct()
    {
        $this->Id_Refroidisseur = new ArrayCollection();
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

    public function getVitesseRotaMini(): ?int
    {
        return $this->Vitesse_Rota_Mini;
    }

    public function setVitesseRotaMini(int $Vitesse_Rota_Mini): self
    {
        $this->Vitesse_Rota_Mini = $Vitesse_Rota_Mini;

        return $this;
    }

    public function getVitesseRotaMaxi(): ?int
    {
        return $this->Vitesse_Rota_Maxi;
    }

    public function setVitesseRotaMaxi(int $Vitesse_Rota_Maxi): self
    {
        $this->Vitesse_Rota_Maxi = $Vitesse_Rota_Maxi;

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
    public function getIdRefroidisseur(): Collection
    {
        return $this->Id_Refroidisseur;
    }

    public function addIdRefroidisseur(Ordinateur $idRefroidisseur): self
    {
        if (!$this->Id_Refroidisseur->contains($idRefroidisseur)) {
            $this->Id_Refroidisseur->add($idRefroidisseur);
            $idRefroidisseur->setIdRefroidisseur($this);
        }

        return $this;
    }

    public function removeIdRefroidisseur(Ordinateur $idRefroidisseur): self
    {
        if ($this->Id_Refroidisseur->removeElement($idRefroidisseur)) {
            // set the owning side to null (unless already changed)
            if ($idRefroidisseur->getIdRefroidisseur() === $this) {
                $idRefroidisseur->setIdRefroidisseur(null);
            }
        }

        return $this;
    }
}
