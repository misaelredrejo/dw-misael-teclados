<?php

namespace App\Repository;

use App\Entity\TecladoUsuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TecladoUsuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method TecladoUsuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method TecladoUsuario[]    findAll()
 * @method TecladoUsuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TecladoUsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TecladoUsuario::class);
    }

    // /**
    //  * @return TecladoUsuario[] Returns an array of TecladoUsuario objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TecladoUsuario
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
