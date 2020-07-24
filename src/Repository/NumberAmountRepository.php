<?php

namespace App\Repository;

use App\Entity\NumberAmount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NumberAmount|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumberAmount|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumberAmount[]    findAll()
 * @method NumberAmount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumberAmountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NumberAmount::class);
    }

    // /**
    //  * @return NumberAmount[] Returns an array of NumberAmount objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NumberAmount
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
