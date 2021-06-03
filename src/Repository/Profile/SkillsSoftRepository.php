<?php

namespace App\Repository\Profile;

use App\Entity\Profile\SkillsSoft;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SkillsSoft|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkillsSoft|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkillsSoft[]    findAll()
 * @method SkillsSoft[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillsSoftRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SkillsSoft::class);
    }

    // /**
    //  * @return SkillsSoft[] Returns an array of SkillsSoft objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SkillsSoft
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
