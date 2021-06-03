<?php

namespace App\Repository\Project;

use App\Entity\Project\InterviewQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InterviewQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method InterviewQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method InterviewQuestion[]    findAll()
 * @method InterviewQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterviewQuestion extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InterviewQuestion::class);
    }

    // /**
    //  * @return InterviewQuestion[] Returns an array of InterviewQuestion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InterviewQuestion
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
