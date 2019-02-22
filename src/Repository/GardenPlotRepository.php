<?php

namespace App\Repository;

use App\Entity\GardenPlot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GardenPlot|null find($id, $lockMode = null, $lockVersion = null)
 * @method GardenPlot|null findOneBy(array $criteria, array $orderBy = null)
 * @method GardenPlot[]    findAll()
 * @method GardenPlot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GardenPlotRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GardenPlot::class);
    }

    // /**
    //  * @return GardenPlot[] Returns an array of GardenPlot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GardenPlot
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
