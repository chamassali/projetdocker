<?php

namespace App\Repository\Project;

use App\Entity\Project\Connector;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Connector|null find($id, $lockMode = null, $lockVersion = null)
 * @method Connector|null findOneBy(array $criteria, array $orderBy = null)
 * @method Connector[]    findAll()
 * @method Connector[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConnectorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Connector::class);
    }

    // /**
    //  * @return Connector[] Returns an array of Connector objects
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
    public function findOneBySomeField($value): ?Connector
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
