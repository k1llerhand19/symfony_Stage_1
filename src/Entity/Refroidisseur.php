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

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 15)]
    private ?string $support_processeur = null;

    #[ORM\Column]
    private ?int $vitesse_rota_mini = null;

    #[ORM\Column]
    private ?int $vitesse_rota_maxi = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\OneToMany(mappedBy: 'refroidisseur', targetEntity: Ordinateur::class)]
    private Collection $refroidisseur_id;

    public function __construct()
    {
        $this->refroidisseur_id = new ArrayCollection();
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

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

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

    public function getSupportProcesseur(): ?string
    {
        return $this->support_processeur;
    }

    public function setSupportProcesseur(string $support_processeur): self
    {
        $this->support_processeur = $support_processeur;

        return $this;
    }

    public function getVitesseRotaMini(): ?int
    {
        return $this->vitesse_rota_mini;
    }

    public function setVitesseRotaMini(int $vitesse_rota_mini): self
    {
        $this->vitesse_rota_mini = $vitesse_rota_mini;

        return $this;
    }

    public function getVitesseRotaMaxi(): ?int
    {
        return $this->vitesse_rota_maxi;
    }

    public function setVitesseRotaMaxi(int $vitesse_rota_maxi): self
    {
        $this->vitesse_rota_maxi = $vitesse_rota_maxi;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getRefroidisseurId(): Collection
    {
        return $this->refroidisseur_id;
    }

    public function addRefroidisseurId(Ordinateur $refroidisseurId): self
    {
        if (!$this->refroidisseur_id->contains($refroidisseurId)) {
            $this->refroidisseur_id->add($refroidisseurId);
            $refroidisseurId->setRefroidisseur($this);
        }

        return $this;
    }

    public function removeRefroidisseurId(Ordinateur $refroidisseurId): self
    {
        if ($this->refroidisseur_id->removeElement($refroidisseurId)) {
            // set the owning side to null (unless already changed)
            if ($refroidisseurId->getRefroidisseur() === $this) {
                $refroidisseurId->setRefroidisseur(null);
            }
        }

        return $this;
    }
}
