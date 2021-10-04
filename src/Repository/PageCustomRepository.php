<?php

namespace App\Repository;

use App\Entity\PageCustom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PageCustom|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageCustom|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageCustom[]    findAll()
 * @method PageCustom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageCustomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageCustom::class);
    }

    // /**
    //  * @return PageCustom[] Returns an array of PageCustom objects
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
    public function findOneBySomeField($value): ?PageCustom
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
