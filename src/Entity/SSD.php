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

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column]
    private ?int $vitesse_lecture = null;

    #[ORM\Column]
    private ?int $vitesse_ecriture = null;

    #[ORM\OneToMany(mappedBy: 'ssd', targetEntity: Ordinateur::class)]
    private Collection $ssd_id;

    public function __construct()
    {
        $this->ssd_id = new ArrayCollection();
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

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getVitesseLecture(): ?int
    {
        return $this->vitesse_lecture;
    }

    public function setVitesseLecture(int $vitesse_lecture): self
    {
        $this->vitesse_lecture = $vitesse_lecture;

        return $this;
    }

    public function getVitesseEcriture(): ?int
    {
        return $this->vitesse_ecriture;
    }

    public function setVitesseEcriture(int $vitesse_ecriture): self
    {
        $this->vitesse_ecriture = $vitesse_ecriture;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getSsdId(): Collection
    {
        return $this->ssd_id;
    }

    public function addSsdId(Ordinateur $ssdId): self
    {
        if (!$this->ssd_id->contains($ssdId)) {
            $this->ssd_id->add($ssdId);
            $ssdId->setSsd($this);
        }

        return $this;
    }

    public function removeSsdId(Ordinateur $ssdId): self
    {
        if ($this->ssd_id->removeElement($ssdId)) {
            // set the owning side to null (unless already changed)
            if ($ssdId->getSsd() === $this) {
                $ssdId->setSsd(null);
            }
        }

        return $this;
    }
}
