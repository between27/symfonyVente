<?php
namespace App\Repository;

use App\Entity\Oignon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Oignon>
 */
class OignonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Oignon::class);
    }

    // Méthodes personnalisées pour Oignon
}
