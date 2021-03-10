<?php

namespace App\Repository;

use App\Entity\TypeCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCard[]    findAll()
 * @method TypeCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeCardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeCard::class);
    }

    // /**
    //  * @return TypeCard[] Returns an array of TypeCard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeCard
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
