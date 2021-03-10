<?php

namespace App\Repository;

use App\Entity\CommentProperty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommentProperty|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentProperty|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentProperty[]    findAll()
 * @method CommentProperty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentPropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentProperty::class);
    }

    // /**
    //  * @return CommentProperty[] Returns an array of CommentProperty objects
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
    public function findOneBySomeField($value): ?CommentProperty
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
