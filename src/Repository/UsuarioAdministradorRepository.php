<?php

namespace App\Repository;

use App\Entity\UsuarioAdministrador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsuarioAdministrador|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioAdministrador|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioAdministrador[]    findAll()
 * @method UsuarioAdministrador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioAdministradorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsuarioAdministrador::class);
    }

    // /**
    //  * @return UsuarioAdministrador[] Returns an array of UsuarioAdministrador objects
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
    public function findOneBySomeField($value): ?UsuarioAdministrador
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
