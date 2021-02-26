<?php

namespace App\Repository;

use App\Entity\Teclado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Teclado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teclado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teclado[]    findAll()
 * @method Teclado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TecladoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teclado::class);
    }

    // /**
    //  * @return Teclado[] Returns an array of Teclado objects
    //  */
    
    public function findAllAndSortByName()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.nombre', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Teclado
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
