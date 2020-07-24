<?php

namespace App\Repository;

use App\Entity\RequiredAmount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RequiredAmount|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequiredAmount|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequiredAmount[]    findAll()
 * @method RequiredAmount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequiredAmountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequiredAmount::class);
    }

    // /**
    //  * @return RequiredAmount[] Returns an array of RequiredAmount objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RequiredAmount
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
