<?php

namespace App\Repository;

use App\Entity\Feligres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Feligres|null find($id, $lockMode = null, $lockVersion = null)
 * @method Feligres|null findOneBy(array $criteria, array $orderBy = null)
 * @method Feligres[]    findAll()
 * @method Feligres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FeligresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Feligres::class);
    }

    // /**
    //  * @return Feligres[] Returns an array of Feligres objects
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
    public function findOneBySomeField($value): ?Feligres
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
