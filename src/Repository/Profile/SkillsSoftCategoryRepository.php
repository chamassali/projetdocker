<?php

namespace App\Repository\Profile;

use App\Entity\Profile\SkillsSoftCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SkillsSoftCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkillsSoftCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkillsSoftCategory[]    findAll()
 * @method SkillsSoftCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillsSoftCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SkillsSoftCategory::class);
    }

    // /**
    //  * @return SkillsSoftCategory[] Returns an array of SkillsSoftCategory objects
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
    public function findOneBySomeField($value): ?SkillsSoftCategory
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
