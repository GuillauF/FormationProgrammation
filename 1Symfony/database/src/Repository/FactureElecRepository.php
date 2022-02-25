<?php

namespace App\Repository;

use App\Entity\FactureElec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FactureElec|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactureElec|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactureElec[]    findAll()
 * @method FactureElec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureElecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FactureElec::class);
    }

    // /**
    //  * @return FactureElec[] Returns an array of FactureElec objects
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
    public function findOneBySomeField($value): ?FactureElec
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
