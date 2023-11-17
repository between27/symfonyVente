<?php

namespace App\Entity;

use App\Repository\AgencesRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    private ?string $texte = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
       return $this->nom;
    }

    public function setText(string $nom): self
    {
       $this->nom = $nom;
       return $this;
    }

    
}