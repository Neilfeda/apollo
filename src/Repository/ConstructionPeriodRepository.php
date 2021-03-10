<?php

namespace App\Repository;

use App\Entity\ConstructionPeriod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConstructionPeriod|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConstructionPeriod|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConstructionPeriod[]    findAll()
 * @method ConstructionPeriod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConstructionPeriodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConstructionPeriod::class);
    }

    // /**
    //  * @return ConstructionPeriod[] Returns an array of ConstructionPeriod objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConstructionPeriod
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
