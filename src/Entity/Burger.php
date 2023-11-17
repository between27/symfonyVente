<?php

namespace App\Entity;

use App\Repository\AgencesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
class Burger
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    private ?string $nom = null;
 
    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Image $image = null;

    #[ORM\OneToOne]

    public function getId (): ?int
    {
        return $this->id;
    }

    public function getNom (): ?string
    {
        return $this->nom;
    }

    public function setNom (string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getImage (): ?Image
    {
        return $this->image;
    }

    public function setImage (Image $image): self
    {
        $this->image = $image;
        return $this;
    }

}