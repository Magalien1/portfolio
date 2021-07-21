<?php

namespace App\Repository;

use App\Entity\CategoryProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryProject[]    findAll()
 * @method CategoryProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryProject::class);
    }

    // /**
    //  * @return CategoryProject[] Returns an array of CategoryProject objects
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
    public function findOneBySomeField($value): ?CategoryProject
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
