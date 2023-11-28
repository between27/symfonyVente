<?php

namespace App\Repository;

use App\Entity\TailleChaussure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TailleChaussure>
 *
 * @method TailleChaussure|null find($id, $lockMode = null, $lockVersion = null)
 * @method TailleChaussure|null findOneBy(array $criteria, array $orderBy = null)
 * @method TailleChaussure[]    findAll()
 * @method TailleChaussure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TailleChaussureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TailleChaussure::class);
    }

//    /**
//     * @return TailleChaussure[] Returns an array of TailleChaussure objects
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

//    public function findOneBySomeField($value): ?TailleChaussure
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
