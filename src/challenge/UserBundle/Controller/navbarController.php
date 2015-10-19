<?php

namespace challenge\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class navbarController extends Controller
{
    public function menuAction()
    {
        $user=$this->getUser();

        return $this->render('challengeUserBundle:navbar:menu.html.twig', array(
            'user'=>$user
             ));
    }
}
