<?php

namespace App\Repository;

use App\Entity\Alimentation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Alimentation>
 *
 * @method Alimentation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alimentation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alimentation[]    findAll()
 * @method Alimentation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlimentationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alimentation::class);
    }

    public function save(Alimentation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Alimentation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
