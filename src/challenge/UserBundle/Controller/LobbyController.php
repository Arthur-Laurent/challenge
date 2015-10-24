<?php

namespace challenge\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LobbyController extends Controller
{
    public function indexAction()
    {
        $lobby=$this->getDoctrine()->getManager()->getRepository('challengePaymentBundle:Orders')->getLobby();

        return $this->render('challengeUserBundle:Lobby:index.html.twig', array(
            'orders'=>$lobby
        ));
    }
    public function lobbybuyAction()
    {
        $user=$this->getUser();
        $orders=$this->getDoctrine()->getManager()->getRepository('challengePaymentBundle:Orders')->getLobbyUser($user);

        return $this->render('challengeUserBundle:Lobby:lobby.html.twig',array(
                'orders'=>$orders
            )

        );
    }
}
