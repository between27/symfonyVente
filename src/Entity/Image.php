<?php


namespace App\Entity;

use App\Repository\AgencesRepository;
use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]

class Image {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(length: 255)]
    private ?string $altText = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
       return $this->url;
    }

    public function setUrl(string $url): self
    {
       $this->url = $url;
       return $this;
    }

    public function getAltText(): ?string
    {
       return $this->altText;
    }

    public function setAltText(string $altText): self
    {
       $this->altText = $altText;
       return $this;
    }
}