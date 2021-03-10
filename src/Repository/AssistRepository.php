<?php

namespace App\Repository;

use App\Entity\Assist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Assist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assist[]    findAll()
 * @method Assist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Assist::class);
    }

    // /**
    //  * @return Assist[] Returns an array of Assist objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Assist
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
