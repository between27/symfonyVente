<?php

namespace App\Entity;

use App\Repository\AgencesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PainRepository::class)]
class Pain {
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;


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
}