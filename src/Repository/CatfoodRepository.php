<?php

namespace App\Repository;

use App\Entity\Catfood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Catfood|null find($id, $lockMode = null, $lockVersion = null)
 * @method Catfood|null findOneBy(array $criteria, array $orderBy = null)
 * @method Catfood[]    findAll()
 * @method Catfood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatfoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Catfood::class);
    }

    // /**
    //  * @return Catfood[] Returns an array of Catfood objects
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
    public function findOneBySomeField($value): ?Catfood
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
