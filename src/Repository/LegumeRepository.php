<?php

namespace App\Repository;

use App\Entity\Legume;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Legume|null find($id, $lockMode = null, $lockVersion = null)
 * @method Legume|null findOneBy(array $criteria, array $orderBy = null)
 * @method Legume[]    findAll()
 * @method Legume[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegumeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Legume::class);
    }

    /**
     * @return Legume[] Returns an array of Legume objects
     */

    public function findAllLegumeOfCurrentMonth()
    {
        /**
         * @link: https://www.php.net/manual/en/function.date.php
         */
        $month = date('n'); // n permet de récupérer le mois de 1 à 12

        /**
         * @link: https://www.php.net/manual/fr/control-structures.switch.php
         */
        switch ($month) {
            case 1:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInJanuary = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 2:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInFebruary = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 3:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInMarch = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 4:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInApril = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 5:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInMay = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 6:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInJune = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 7:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInJuly = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 8:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInAugust = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 9:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInSeptember = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 10:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInOctober = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 11:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInNovember = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
            case 12:
                return $this->createQueryBuilder('f')
                    ->andWhere('f.harvestedInDecember = 1')
                    ->orderBy('f.legumeName', 'ASC')
                    ->getQuery()
                    ->getResult();
                break;
        }
    }
}
