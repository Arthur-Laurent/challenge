<?php

namespace challenge\UserBundle\Controller;

use challenge\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function showAction(User $user)
    {
        $lobby=$this->getDoctrine()->getManager()->getRepository('challengeUserBundle:User')->getNLobby($user);



        return $this->render('challengeUserBundle:Profile:show_profile.html.twig', array(
            'lobby'=>$lobby,
            'user'=>$user,

        ));
    }
}
