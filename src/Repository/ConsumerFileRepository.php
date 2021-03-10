<?php

namespace App\Repository;

use App\Entity\ConsumerFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConsumerFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConsumerFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConsumerFile[]    findAll()
 * @method ConsumerFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsumerFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsumerFile::class);
    }

    // /**
    //  * @return ConsumerFile[] Returns an array of ConsumerFile objects
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
    public function findOneBySomeField($value): ?ConsumerFile
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
