<?php

namespace App\Repository;

use App\Entity\Undertake;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Undertake|null find($id, $lockMode = null, $lockVersion = null)
 * @method Undertake|null findOneBy(array $criteria, array $orderBy = null)
 * @method Undertake[]    findAll()
 * @method Undertake[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UndertakeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Undertake::class);
    }

    // /**
    //  * @return Undertake[] Returns an array of Undertake objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Undertake
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
