<?php

namespace App\Repository;

use App\Entity\CategorieVetement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategorieVetement>
 *
 * @method CategorieVetement|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieVetement|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieVetement[]    findAll()
 * @method CategorieVetement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieVetementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieVetement::class);
    }

//    /**
//     * @return CategorieVetement[] Returns an array of CategorieVetement objects
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

//    public function findOneBySomeField($value): ?CategorieVetement
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
