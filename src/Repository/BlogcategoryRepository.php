<?php

namespace App\Repository;

use App\Entity\Blogcategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blogcategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blogcategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blogcategory[]    findAll()
 * @method Blogcategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogcategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blogcategory::class);
    }

    // /**
    //  * @return Blogcategory[] Returns an array of Blogcategory objects
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
    public function findOneBySomeField($value): ?Blogcategory
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
