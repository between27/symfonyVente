<?php

namespace App\Repository;

use App\Entity\TailleVetement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TailleVetement>
 *
 * @method TailleVetement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TailleVetement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TailleVetement[]    findAll()
 * @method TailleVetement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TailleVetementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TailleVetement::class);
    }

//    /**
//     * @return TailleVetement[] Returns an array of TailleVetement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TailleVetement
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
