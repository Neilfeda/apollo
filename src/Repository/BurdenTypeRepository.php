<?php

namespace App\Repository;

use App\Entity\BurdenType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BurdenType|null find($id, $lockMode = null, $lockVersion = null)
 * @method BurdenType|null findOneBy(array $criteria, array $orderBy = null)
 * @method BurdenType[]    findAll()
 * @method BurdenType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BurdenTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BurdenType::class);
    }

    // /**
    //  * @return BurdenType[] Returns an array of BurdenType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BurdenType
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
