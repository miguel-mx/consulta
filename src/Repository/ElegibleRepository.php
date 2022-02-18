<?php

namespace App\Repository;

use App\Entity\Elegible;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Elegible|null find($id, $lockMode = null, $lockVersion = null)
 * @method Elegible|null findOneBy(array $criteria, array $orderBy = null)
 * @method Elegible[]    findAll()
 * @method Elegible[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElegibleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Elegible::class);
    }

    // /**
    //  * @return Elegible[] Returns an array of Elegible objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Elegible
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
