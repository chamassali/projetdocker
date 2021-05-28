<?php

namespace App\Repository;

use App\Entity\CountryCurrency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CountryCurrency|null find($id, $lockMode = null, $lockVersion = null)
 * @method CountryCurrency|null findOneBy(array $criteria, array $orderBy = null)
 * @method CountryCurrency[]    findAll()
 * @method CountryCurrency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountryCurrencysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CountryCurrency::class);
    }

    // /**
    //  * @return CountryCurrency[] Returns an array of CountryCurrency objects
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
    public function findOneBySomeField($value): ?CountryCurrency
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
