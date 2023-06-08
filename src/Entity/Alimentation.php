<?php

namespace App\Entity;

use App\Repository\AlimentationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlimentationRepository::class)]
class Alimentation
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
    private ?int $puissance = null;

    #[ORM\OneToMany(mappedBy: 'alimentaion', targetEntity: Ordinateur::class)]
    private Collection $alim_id;

    public function __construct()
    {
        $this->alim_id = new ArrayCollection();
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

    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(int $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * @return Collection<int, Ordinateur>
     */
    public function getAlimId(): Collection
    {
        return $this->alim_id;
    }

    public function addAlimId(Ordinateur $alimId): self
    {
        if (!$this->alim_id->contains($alimId)) {
            $this->alim_id->add($alimId);
            $alimId->setAlimentaion($this);
        }

        return $this;
    }

    public function removeAlimId(Ordinateur $alimId): self
    {
        if ($this->alim_id->removeElement($alimId)) {
            // set the owning side to null (unless already changed)
            if ($alimId->getAlimentaion() === $this) {
                $alimId->setAlimentaion(null);
            }
        }

        return $this;
    }
}
