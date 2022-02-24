<?php

namespace App\Repository;

use App\Entity\BandePassante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BandePassante|null find($id, $lockMode = null, $lockVersion = null)
 * @method BandePassante|null findOneBy(array $criteria, array $orderBy = null)
 * @method BandePassante[]    findAll()
 * @method BandePassante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BandePassanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BandePassante::class);
    }

    // /**
    //  * @return BandePassante[] Returns an array of BandePassante objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BandePassante
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
