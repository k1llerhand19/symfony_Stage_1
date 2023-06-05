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
    private ?string $Support_processeur = null;

    #[ORM\Column]
    private ?int $Vitesse_rota_mini = null;

    #[ORM\Column]
    private ?int $Vitesse_rota_maxi = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Refroidisseur', targetEntity: Ordinateur::class)]
    private Collection $Refroidisseur_Id;

    public function __construct()
    {
        $this->Refroidisseur_Id = new ArrayCollection();
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

    public function getVitesseRotaMini(): ?int
    {
        return $this->Vitesse_rota_mini;
    }

    public function setVitesseRotaMini(int $Vitesse_rota_mini): self
    {
        $this->Vitesse_rota_mini = $Vitesse_rota_mini;

        return $this;
    }

    public function getVitesseRotaMaxi(): ?int
    {
        return $this->Vitesse_rota_maxi;
    }

    public function setVitesseRotaMaxi(int $Vitesse_rota_maxi): self
    {
        $this->Vitesse_rota_maxi = $Vitesse_rota_maxi;

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
    public function getRefroidisseurId(): Collection
    {
        return $this->Refroidisseur_Id;
    }

    public function addRefroidisseurId(Ordinateur $refroidisseurId): self
    {
        if (!$this->Refroidisseur_Id->contains($refroidisseurId)) {
            $this->Refroidisseur_Id->add($refroidisseurId);
            $refroidisseurId->setRefroidisseur($this);
        }

        return $this;
    }

    public function removeRefroidisseurId(Ordinateur $refroidisseurId): self
    {
        if ($this->Refroidisseur_Id->removeElement($refroidisseurId)) {
            // set the owning side to null (unless already changed)
            if ($refroidisseurId->getRefroidisseur() === $this) {
                $refroidisseurId->setRefroidisseur(null);
            }
        }

        return $this;
    }
}
