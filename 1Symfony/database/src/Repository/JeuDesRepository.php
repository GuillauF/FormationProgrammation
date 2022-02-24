<?php

namespace App\Repository;

use App\Entity\JeuDes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JeuDes|null find($id, $lockMode = null, $lockVersion = null)
 * @method JeuDes|null findOneBy(array $criteria, array $orderBy = null)
 * @method JeuDes[]    findAll()
 * @method JeuDes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JeuDesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JeuDes::class);
    }

    // /**
    //  * @return JeuDes[] Returns an array of JeuDes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JeuDes
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
