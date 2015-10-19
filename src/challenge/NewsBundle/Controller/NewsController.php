<?php

namespace challenge\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
public function indexAction()
{
    $em=$this->getDoctrine()->getManager();
    $news=$em->getRepository('challengeNewsBundle:news')->findAll();

return $this->render('challengeNewsBundle:News:index.html.twig',array(
    'news'=>$news
));
}
}
