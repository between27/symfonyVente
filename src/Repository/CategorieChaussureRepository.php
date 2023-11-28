<?php

namespace App\Repository;

use App\Entity\CategorieChaussure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategorieChaussure>
 *
 * @method CategorieChaussure|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieChaussure|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieChaussure[]    findAll()
 * @method CategorieChaussure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieChaussureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieChaussure::class);
    }

//    /**
//     * @return CategorieChaussure[] Returns an array of CategorieChaussure objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CategorieChaussure
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
