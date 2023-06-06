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

    #[ORM\Column(length: 25)]
    private ?string $Nom = null;

    #[ORM\Column(length: 25)]
    private ?string $Modele = null;

    #[ORM\Column(length: 25)]
    private ?string $Marque = null;

    #[ORM\Column]
    private ?int $Puissance = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\OneToMany(mappedBy: 'Alim', targetEntity: Ordinateur::class)]
    private Collection $Alim_Id;

    public function __construct()
    {
        $this->Alim_Id = new ArrayCollection();
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

    public function getPuissance(): ?int
    {
        return $this->Puissance;
    }

    public function setPuissance(int $Puissance): self
    {
        $this->Puissance = $Puissance;

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
    public function getAlimId(): Collection
    {
        return $this->Alim_Id;
    }

    public function addAlimId(Ordinateur $alimId): self
    {
        if (!$this->Alim_Id->contains($alimId)) {
            $this->Alim_Id->add($alimId);
            $alimId->setAlim($this);
        }

        return $this;
    }

    public function removeAlimId(Ordinateur $alimId): self
    {
        if ($this->Alim_Id->removeElement($alimId)) {
            // set the owning side to null (unless already changed)
            if ($alimId->getAlim() === $this) {
                $alimId->setAlim(null);
            }
        }

        return $this;
    }

    public function index(): Response
{
    $alimentation = new Alimentation();
    $form_alim = $this->createForm(AlimFormType::class, $alimentation);

    $form_alim->handleRequest($request);
    if ($form_alim->isSubmitted() && $form_alim->isValid()){
        dump($alimentation);die;
    }

    return $this->render('default/index.html.twig', [
        'form_alim' => $form_alim->createView()
    ]);
}

}
