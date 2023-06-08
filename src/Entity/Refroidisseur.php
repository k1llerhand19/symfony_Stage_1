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
    private ?string $modele = null;

    #[ORM\Column(length: 25)]
    private ?string $marque = null;

    #[ORM\Column(length: 20)]
    private ?string $support_cpu = null;

    #[ORM\Column]
    private ?int $vitesse_rotation_minimum = null;

    #[ORM\Column]
    private ?int $vitesse_rotation_maximum = null;

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

    public function getSupportCpu(): ?string
    {
        return $this->support_cpu;
    }

    public function setSupportCpu(string $support_cpu): self
    {
        $this->support_cpu = $support_cpu;

        return $this;
    }

    public function getVitesseRotationMinimum(): ?int
    {
        return $this->vitesse_rotation_minimum;
    }

    public function setVitesseRotationMinimum(int $vitesse_rotation_minimum): self
    {
        $this->vitesse_rotation_minimum = $vitesse_rotation_minimum;

        return $this;
    }

    public function getVitesseRotationMaximum(): ?int
    {
        return $this->vitesse_rotation_maximum;
    }

    public function setVitesseRotationMaximum(int $vitesse_rotation_maximum): self
    {
        $this->vitesse_rotation_maximum = $vitesse_rotation_maximum;

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
