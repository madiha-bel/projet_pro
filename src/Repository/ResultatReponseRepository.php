<?php

namespace App\Repository;

use App\Entity\ResultatReponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ResultatReponse>
 *
 * @method ResultatReponse|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResultatReponse|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResultatReponse[]    findAll()
 * @method ResultatReponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultatReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResultatReponse::class);
    }

    public function save(ResultatReponse $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ResultatReponse $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ResultatReponse[] Returns an array of ResultatReponse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ResultatReponse
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
