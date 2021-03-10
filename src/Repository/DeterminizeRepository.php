<?php

namespace App\Repository;

use App\Entity\Determinize;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Determinize|null find($id, $lockMode = null, $lockVersion = null)
 * @method Determinize|null findOneBy(array $criteria, array $orderBy = null)
 * @method Determinize[]    findAll()
 * @method Determinize[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeterminizeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Determinize::class);
    }

    // /**
    //  * @return Determinize[] Returns an array of Determinize objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Determinize
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
