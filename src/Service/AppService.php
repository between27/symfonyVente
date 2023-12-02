<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vetement;
use App\Entity\Chaussure;


class AppService {
    public function __construct(private EntityManagerInterface $entityManager)
    {
        
    }


    public function save(mixed $vetement) {
        $this->entityManager->persist($vetement);
        $this->entityManager->flush();

    }
}