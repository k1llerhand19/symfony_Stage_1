<?php

namespace App\Entity;

use App\Repository\SSDRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SSDRepository::class)]
class SSD
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
    private ?int $Vitesse_Lecture = null;

    #[ORM\Column]
    private ?int $Vitesse_Ecriture = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Id_SSD', targetEntity: Ordinateur::class)]
    private Collection $Id_SSD;

    public function __construct()
    {
        $this->Id_SSD = new ArrayCollection();
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

    public function getVitesseLecture(): ?int
    {
        return $this->Vitesse_Lecture;
    }

    public function setVitesseLecture(int $Vitesse_Lecture): self
    {
        $this->Vitesse_Lecture = $Vitesse_Lecture;

        return $this;
    }

    public function getVitesseEcriture(): ?int
    {
        return $this->Vitesse_Ecriture;
    }

    public function setVitesseEcriture(int $Vitesse_Ecriture): self
    {
        $this->Vitesse_Ecriture = $Vitesse_Ecriture;

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
    public function getIdSSD(): Collection
    {
        return $this->Id_SSD;
    }

    public function addIdSSD(Ordinateur $idSSD): self
    {
        if (!$this->Id_SSD->contains($idSSD)) {
            $this->Id_SSD->add($idSSD);
            $idSSD->setIdSSD($this);
        }

        return $this;
    }

    public function removeIdSSD(Ordinateur $idSSD): self
    {
        if ($this->Id_SSD->removeElement($idSSD)) {
            // set the owning side to null (unless already changed)
            if ($idSSD->getIdSSD() === $this) {
                $idSSD->setIdSSD(null);
            }
        }

        return $this;
    }
}
