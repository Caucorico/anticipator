<?php

namespace App\Repository;

use App\Entity\QuantityAmount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuantityAmount|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuantityAmount|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuantityAmount[]    findAll()
 * @method QuantityAmount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuantityAmountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuantityAmount::class);
    }

    // /**
    //  * @return QuantityAmount[] Returns an array of QuantityAmount objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuantityAmount
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
