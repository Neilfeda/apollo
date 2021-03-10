<?php

namespace App\Repository;

use App\Entity\AgreementType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AgreementType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgreementType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgreementType[]    findAll()
 * @method AgreementType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgreementTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgreementType::class);
    }

    // /**
    //  * @return AgreementType[] Returns an array of AgreementType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgreementType
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
