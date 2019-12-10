<?php

namespace App\Repository;

use App\Entity\Iglesia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Iglesia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Iglesia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Iglesia[]    findAll()
 * @method Iglesia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IglesiaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Iglesia::class);
    }

    // /**
    //  * @return Iglesia[] Returns an array of Iglesia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Iglesia
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
