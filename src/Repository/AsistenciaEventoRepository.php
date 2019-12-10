<?php

namespace App\Repository;

use App\Entity\AsistenciaEvento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AsistenciaEvento|null find($id, $lockMode = null, $lockVersion = null)
 * @method AsistenciaEvento|null findOneBy(array $criteria, array $orderBy = null)
 * @method AsistenciaEvento[]    findAll()
 * @method AsistenciaEvento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsistenciaEventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AsistenciaEvento::class);
    }

    // /**
    //  * @return AsistenciaEvento[] Returns an array of AsistenciaEvento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AsistenciaEvento
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
