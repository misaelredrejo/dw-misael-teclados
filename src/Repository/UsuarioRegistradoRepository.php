<?php

namespace App\Repository;

use App\Entity\UsuarioRegistrado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsuarioRegistrado|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioRegistrado|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioRegistrado[]    findAll()
 * @method UsuarioRegistrado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioRegistradoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsuarioRegistrado::class);
    }

    // /**
    //  * @return UsuarioRegistrado[] Returns an array of UsuarioRegistrado objects
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
    public function findOneBySomeField($value): ?UsuarioRegistrado
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
