<?php

namespace App\Repository;

use App\Entity\CustomPlant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomPlant|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomPlant|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomPlant[]    findAll()
 * @method CustomPlant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPlantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomPlant::class);
    }

    // /**
    //  * @return CustomPlant[] Returns an array of CustomPlant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomPlant
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
