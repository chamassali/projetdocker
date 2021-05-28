<?php

namespace App\Repository;

use App\Entity\AutoConnect;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AutoConnect|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutoConnect|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutoConnect[]    findAll()
 * @method AutoConnect[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutoConnectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutoConnect::class);
    }

    // /**
    //  * @return AutoConnect[] Returns an array of AutoConnect objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AutoConnect
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
