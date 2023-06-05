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

    #[ORM\Column(length: 25)]
    private ?string $Marque = null;

    #[ORM\Column(length: 20)]
    private ?string $Format_boitier = null;

    #[ORM\Column(length: 20)]
    private ?string $Format_alim = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Boitier', targetEntity: Ordinateur::class)]
    private Collection $Boitier_Id;

    public function __construct()
    {
        $this->Boitier_Id = new ArrayCollection();
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
        return $this->Format_boitier;
    }

    public function setFormatBoitier(string $Format_boitier): self
    {
        $this->Format_boitier = $Format_boitier;

        return $this;
    }

    public function getFormatAlim(): ?string
    {
        return $this->Format_alim;
    }

    public function setFormatAlim(string $Format_alim): self
    {
        $this->Format_alim = $Format_alim;

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
    public function getBoitierId(): Collection
    {
        return $this->Boitier_Id;
    }

    public function addBoitierId(Ordinateur $boitierId): self
    {
        if (!$this->Boitier_Id->contains($boitierId)) {
            $this->Boitier_Id->add($boitierId);
            $boitierId->setBoitier($this);
        }

        return $this;
    }

    public function removeBoitierId(Ordinateur $boitierId): self
    {
        if ($this->Boitier_Id->removeElement($boitierId)) {
            // set the owning side to null (unless already changed)
            if ($boitierId->getBoitier() === $this) {
                $boitierId->setBoitier(null);
            }
        }

        return $this;
    }


}
