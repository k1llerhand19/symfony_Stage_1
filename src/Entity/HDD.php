<?php

namespace App\Entity;

use App\Repository\HddRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HddRepository::class)]
class Hdd
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
    private ?int $Vitesse_rotation = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Hdd', targetEntity: Ordinateur::class)]
    private Collection $Hdd_Id;

    public function __construct()
    {
        $this->Hdd_Id = new ArrayCollection();
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
        return $this->Vitesse_rotation;
    }

    public function setVitesseRotation(int $Vitesse_rotation): self
    {
        $this->Vitesse_rotation = $Vitesse_rotation;

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
    public function getHddId(): Collection
    {
        return $this->Hdd_Id;
    }

    public function addHddId(Ordinateur $hddId): self
    {
        if (!$this->Hdd_Id->contains($hddId)) {
            $this->Hdd_Id->add($hddId);
            $hddId->setHdd($this);
        }

        return $this;
    }

    public function removeHddId(Ordinateur $hddId): self
    {
        if ($this->Hdd_Id->removeElement($hddId)) {
            // set the owning side to null (unless already changed)
            if ($hddId->getHdd() === $this) {
                $hddId->setHdd(null);
            }
        }

        return $this;
    }

   
}
