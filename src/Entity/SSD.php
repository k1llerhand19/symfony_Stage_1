<?php

namespace App\Entity;

use App\Repository\SsdRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SsdRepository::class)]
class Ssd
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

    #[ORM\Column]
    private ?int $Capacite = null;

    #[ORM\Column]
    private ?int $Vitesse_lecture = null;

    #[ORM\Column]
    private ?int $Vitesse_ecriture = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Ssd', targetEntity: Ordinateur::class)]
    private Collection $Ssd_Id;

    public function __construct()
    {
        $this->Ssd_Id = new ArrayCollection();
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
        return $this->Vitesse_lecture;
    }

    public function setVitesseLecture(int $Vitesse_lecture): self
    {
        $this->Vitesse_lecture = $Vitesse_lecture;

        return $this;
    }

    public function getVitesseEcriture(): ?int
    {
        return $this->Vitesse_ecriture;
    }

    public function setVitesseEcriture(int $Vitesse_ecriture): self
    {
        $this->Vitesse_ecriture = $Vitesse_ecriture;

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
    public function getSsdId(): Collection
    {
        return $this->Ssd_Id;
    }

    public function addSsdId(Ordinateur $ssdId): self
    {
        if (!$this->Ssd_Id->contains($ssdId)) {
            $this->Ssd_Id->add($ssdId);
            $ssdId->setSsd($this);
        }

        return $this;
    }

    public function removeSsdId(Ordinateur $ssdId): self
    {
        if ($this->Ssd_Id->removeElement($ssdId)) {
            // set the owning side to null (unless already changed)
            if ($ssdId->getSsd() === $this) {
                $ssdId->setSsd(null);
            }
        }

        return $this;
    }

}
