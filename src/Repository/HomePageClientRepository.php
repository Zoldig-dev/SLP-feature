<?php

namespace App\Repository;

use App\Entity\HomePageClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomePageClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomePageClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomePageClient[]    findAll()
 * @method HomePageClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomePageClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomePageClient::class);
    }

    // /**
    //  * @return HomePageClient[] Returns an array of HomePageClient objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomePageClient
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
