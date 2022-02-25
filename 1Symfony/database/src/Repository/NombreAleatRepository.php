<?php

namespace App\Repository;

use App\Entity\NombreAleat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NombreAleat|null find($id, $lockMode = null, $lockVersion = null)
 * @method NombreAleat|null findOneBy(array $criteria, array $orderBy = null)
 * @method NombreAleat[]    findAll()
 * @method NombreAleat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NombreAleatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NombreAleat::class);
    }

    // /**
    //  * @return NombreAleat[] Returns an array of NombreAleat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NombreAleat
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
