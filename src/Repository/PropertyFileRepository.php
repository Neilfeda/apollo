<?php

namespace App\Repository;

use App\Entity\PropertyFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PropertyFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method PropertyFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method PropertyFile[]    findAll()
 * @method PropertyFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PropertyFile::class);
    }

    // /**
    //  * @return PropertyFile[] Returns an array of PropertyFile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PropertyFile
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
