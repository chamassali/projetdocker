<?php

namespace App\Repository\Profile;

use App\Entity\Profile\ProfileType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProfileType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfileType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfileType[]    findAll()
 * @method ProfileType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfileTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfileType::class);
    }

    // /**
    //  * @return ProfileType[] Returns an array of ProfileType objects
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
    public function findOneBySomeField($value): ?ProfileType
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
