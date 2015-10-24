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
    public function challengeAction()
    {
        return $this->render('challengeLBundle:Accueil:achat.html.twig');
    }
    public function faqAction()
    {
        return $this->render('challengeLBundle:Accueil:faq.html.twig');
    }
    public function paypalAction()
    {
        $formule=$this->getDoctrine()->getManager()->getRepository('challengePaymentBundle:Formule')->getformule();
        return $this->render('challengeLBundle:Accueil:paypal.html.twig',array(
            'formules'=>$formule,
        ));
    }
    public function virementAction()
    {
        return $this->render('challengeLBundle:Accueil:virement.html.twig');
    }
    public function youpassAction()
    {
        return $this->render('challengeLBundle:Accueil:youpass.html.twig');
    }


}

