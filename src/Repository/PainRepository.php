<?php
namespace App\Repository;

use App\Entity\Pain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pain|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pain|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pain[]    findAll()
 * @method Pain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pain::class);
    }

    // Vous pouvez ajouter ici des méthodes personnalisées
    // Par exemple, une méthode pour trouver des pains par un certain critère
    public function findPainsBySomeCriteria($criteria)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.someField = :criteria')
            ->setParameter('criteria', $criteria)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
