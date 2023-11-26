<?php

namespace App\Repository;

use App\Entity\Burger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Burger>
 *
 * @method Burger|null find($id, $lockMode = null, $lockVersion = null)
 * @method Burger|null findOneBy(array $criteria, array $orderBy = null)
 * @method Burger[]    findAll()
 * @method Burger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BurgerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Burger::class);
    }

    // Vous pouvez ajouter ici des méthodes personnalisées pour interagir avec vos burgers

    // Exemple de méthode personnalisée
    public function findBurgersWithSpecificCriteria(/* vos critères */)
    {
        return $this->createQueryBuilder('b')
            // ->andWhere('b.someField = :val')
            // ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }
}
