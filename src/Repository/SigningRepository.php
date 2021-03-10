<?php

namespace App\Repository;

use App\Entity\Signing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Signing|null find($id, $lockMode = null, $lockVersion = null)
 * @method Signing|null findOneBy(array $criteria, array $orderBy = null)
 * @method Signing[]    findAll()
 * @method Signing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SigningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Signing::class);
    }

    // /**
    //  * @return Signing[] Returns an array of Signing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Signing
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
