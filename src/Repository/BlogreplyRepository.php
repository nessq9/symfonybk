<?php

namespace App\Repository;

use App\Entity\Blogreply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blogreply|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blogreply|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blogreply[]    findAll()
 * @method Blogreply[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogreplyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blogreply::class);
    }

    // /**
    //  * @return Blogreply[] Returns an array of Blogreply objects
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
    public function findOneBySomeField($value): ?Blogreply
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
