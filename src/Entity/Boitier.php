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

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 25)]
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\Column(length: 20)]
    private ?string $format_boitier = null;

    #[ORM\Column(length: 20)]
    private ?string $format_alimentation = null;

    #[ORM\OneToMany(mappedBy: 'boitier', targetEntity: Ordinateur::class)]
    private Collection $boitier_id;

    public function __construct()
    {
        $this->boitier_id = new ArrayCollection();
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

    public function getFormatBoitier(): ?string
    {
        return $this->format_boitier;
    }

    public function setFormatBoitier(string $format_boitier): self
    {
        $this->format_boitier = $format_boitier;

        return $this;
    }

    public function getFormatAlimentation(): ?string
    {
        return $this->format_alimentation;
    }

    public function setFormatAlimentation(string $format_alimentation): self
    {
        $this->format_alimentation = $format_alimentation;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getBoitierId(): Collection
    {
        return $this->boitier_id;
    }

    public function addBoitierId(Ordinateur $boitierId): self
    {
        if (!$this->boitier_id->contains($boitierId)) {
            $this->boitier_id->add($boitierId);
            $boitierId->setBoitier($this);
        }

        return $this;
    }

    public function removeBoitierId(Ordinateur $boitierId): self
    {
        if ($this->boitier_id->removeElement($boitierId)) {
            // set the owning side to null (unless already changed)
            if ($boitierId->getBoitier() === $this) {
                $boitierId->setBoitier(null);
            }
        }

        return $this;
    }
}
