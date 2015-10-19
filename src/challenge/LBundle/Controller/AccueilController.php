<?php

namespace challenge\LBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('challengeLBundle:Accueil:index.html.twig');
    }
    public function newsAction()
    {
        return $this->render('challengeLBundle:Accueil:index.html.twig');
    }

}

