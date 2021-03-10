<?php

namespace App\Repository;

use App\Entity\Rentale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rentale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rentale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rentale[]    findAll()
 * @method Rentale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rentale::class);
    }

    // /**
    //  * @return Rentale[] Returns an array of Rentale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rentale
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
