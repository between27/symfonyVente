<?php
namespace App\Repository;

use App\Entity\Sauce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sauce>
 */
class SauceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sauce::class);
    }

    // Méthodes personnalisées pour Sauce
}
