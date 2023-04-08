<?php

namespace App\Repository;

use App\Entity\CourierOutcoming;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CourierOutcoming>
 *
 * @method CourierOutcoming|null find($id, $lockMode = null, $lockVersion = null)
 * @method CourierOutcoming|null findOneBy(array $criteria, array $orderBy = null)
 * @method CourierOutcoming[]    findAll()
 * @method CourierOutcoming[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourierOutcomingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CourierOutcoming::class);
    }

    public function save(CourierOutcoming $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CourierOutcoming $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CourierOutcoming[] Returns an array of CourierOutcoming objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CourierOutcoming
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
