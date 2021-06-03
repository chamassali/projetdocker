<?php

namespace App\Repository\Project;

use App\Entity\Project\ProjectQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectQuestion[]    findAll()
 * @method ProjectQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectQuestion extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectQuestion::class);
    }

    // /**
    //  * @return ProjectQuestion[] Returns an array of ProjectQuestion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProjectQuestion
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
