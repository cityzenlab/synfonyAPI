<?php
/**
 * Created by PhpStorm.
 * User: pbborel
 * Date: 10/11/2015
 * Time: 14:19
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{

    public function findAll()
    {
        $queryBuilder = $this->createQueryBuilder('user');
        return $queryBuilder
            ->getQuery()
            ->getResult()
            ;
   }


    public function findByName($name)
    {
        $queryBuilder = $this->createQueryBuilder('user');
        $queryBuilder
            ->andWhere(('user.name = :name'))
            ->setParameter('name',$name);
        return $queryBuilder
            ->getQuery()
            ->getResult()
            ;
    }




}