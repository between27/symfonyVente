<?php

namespace App\Entity;

use App\Repository\VetementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VetementRepository::class)]
class Vetement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $nom = null;

    #[ORM\Column(length: 200)]
    private ?string $urlImage = null;


    #[ORM\ManyToOne(inversedBy: 'vetements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    #[ORM\ManyToOne(inversedBy: 'vetements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CategorieVetement $categorie = null;

    #[ORM\ManyToMany(targetEntity: TailleVetement::class, inversedBy: 'vetements')]
    private Collection $taille;

    public function __construct()
    {
        $this->taille = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->urlImage;
    }

    public function setUrlImage(string $urlImage): static
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getCategorie(): ?CategorieVetement
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieVetement $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, TailleVetement>
     */
    public function getTaille(): Collection
    {
        return $this->taille;
    }

    public function addTaille(TailleVetement $taille): static
    {
        if (!$this->taille->contains($taille)) {
            $this->taille->add($taille);
        }

        return $this;
    }

    public function removeTaille(TailleVetement $taille): static
    {
        $this->taille->removeElement($taille);

        return $this;
    }
}
