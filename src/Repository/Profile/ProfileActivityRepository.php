<?php

namespace App\Repository\Profile;

use App\Entity\Profile\ProfileActivity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfileActivity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfileActivity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfileActivity[]    findAll()
 * @method ProfileActivity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfileActivityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfileActivity::class);
    }

    // /**
    //  * @return ProfileActivity[] Returns an array of ProfileActivity objects
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
    public function findOneBySomeField($value): ?ProfileActivity
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
