<?php

namespace App\Repository;

use App\Entity\FriendStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FriendStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method FriendStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method FriendStatus[]    findAll()
 * @method FriendStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FriendStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FriendStatus::class);
    }

    // /**
    //  * @return FriendStatus[] Returns an array of FriendStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FriendStatus
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
