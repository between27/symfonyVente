<?php

namespace App\Entity;

use App\Repository\ChaussureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChaussureRepository::class)]
class Chaussure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'chaussures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    #[ORM\ManyToOne(inversedBy: 'chaussures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CategorieChaussure $categorie = null;

    #[ORM\ManyToMany(targetEntity: TailleChaussure::class, inversedBy: 'chaussures')]
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

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }


    public function getCategorie(): ?CategorieChaussure
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieChaussure $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, TailleChaussure>
     */

    /**
     * @return Collection<int, TailleChaussure>
     */
    public function getTaille(): Collection
    {
        return $this->taille;
    }

    public function addTaille(TailleChaussure $taille): static
    {
        if (!$this->taille->contains($taille)) {
            $this->taille->add($taille);
        }

        return $this;
    }

    public function removeTaille(TailleChaussure $taille): static
    {
        $this->taille->removeElement($taille);

        return $this;
    }

}