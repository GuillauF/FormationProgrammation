<?php

namespace App\Repository;

use App\Entity\VolumeCone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VolumeCone|null find($id, $lockMode = null, $lockVersion = null)
 * @method VolumeCone|null findOneBy(array $criteria, array $orderBy = null)
 * @method VolumeCone[]    findAll()
 * @method VolumeCone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VolumeConeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VolumeCone::class);
    }

    // /**
    //  * @return VolumeCone[] Returns an array of VolumeCone objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VolumeCone
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
