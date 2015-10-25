<?php


namespace challenge\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;



class UserRepository extends EntityRepository
{
    public function getNLobby(User $user)
    {
        $nblb=0;
        $query = $this->createQueryBuilder('u')
            ->where('u.id =:id')
            ->setParameter('id',$user->getId())
            ->leftJoin('u.orders','o')
            ->addSelect('o')

            ->andWhere('o.payer =1')
            ->getQuery()
            ->getResult();



        foreach($query as $lobby){
            $nblb=$nblb +1;


        }

        return  $nblb;
    }


}