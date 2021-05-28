<?php

namespace App\Repository;

use App\Entity\ProfileParameter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfileParameter|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfileParameter|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfileParameter[]    findAll()
 * @method ProfileParameter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfileParameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfileParameter::class);
    }

    // /**
    //  * @return ProfileParameter[] Returns an array of ProfileParameter objects
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
    public function findOneBySomeField($value): ?ProfileParameter
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
