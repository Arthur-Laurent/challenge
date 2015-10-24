<?php


namespace challenge\PaymentBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use challenge\UserBundle\Entity\User;
use challenge\PaymentBundle\Entity\Game;
use challenge\PaymentBundle\Entity\Image;
use challenge\PaymentBundle\Entity\Lobby;

class OrdersRepository extends EntityRepository
{
    public function getNLobby()
    {
        $nblb=0;
        $query = $this->createQueryBuilder('o')
            ->where('o.completed = 0')
            ->andWhere('o.payer =1')
            ->getQuery()
            ->getResult();


        foreach($query as $lobby){
            $nblb=$nblb +1;


        }

        return  $nblb;
    }
    public function getLobby()
    {

        $query = $this->createQueryBuilder('o')
            ->where('o.payer = true')
            ->andWhere('o.completed = false')
            ->leftJoin('o.user','u')
            ->leftJoin('o.formule','f')
            ->addselect('u')
            ->addSelect('f')
            ->getQuery();



        return $query->getResult();
    }
    public function getLobbyUser(User $user)
    {

        $query = $this->createQueryBuilder('o')
            ->where('o.user = :user')
            ->setParameter('user', $user->getid())
            ->leftJoin('o.formule','f')
            ->addselect('f')
            ->getQuery()
            ->getResult();




        return $query;
    }

}