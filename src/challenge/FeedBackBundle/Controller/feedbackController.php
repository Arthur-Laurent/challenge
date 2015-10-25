<?php

namespace challenge\FeedBackBundle\Controller;

use challenge\FeedBackBundle\Entity\Avis;
use challenge\FeedBackBundle\Form\AvisType;
use challenge\PaymentBundle\Entity\Orders;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class feedbackController extends Controller
{
    public function indexAction()
    {
        $orders=$this->getDoctrine()->getManager()->getRepository('challengePaymentBundle:Orders')->getOrders();


        return $this->render('challengeFeedBackBundle::layout.html.twig', array('orders' => $orders,
            ));
    }

    public function addAction(Request $request,Orders $order)
    {

        if($order->getCancomment()){
            $avis = new Avis();
            $form = $this->get('form.factory')->create(new AvisType(), $avis);

            if ($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $order->setCancomment(false);
                $order->setAvis($avis);
                $em->persist($order);
                $em->flush();
                return $this->redirect($this->generateUrl('challenge_feed_back_index'));
            }
            $orders=$this->getDoctrine()->getManager()->getRepository('challengePaymentBundle:Orders')->getOrders();
            return $this->render('challengeFeedBackBundle:Comments:comments.html.twig', array('orders' => $orders,
                'order'=>$order,
                'form'=>$form->createView()));
        }

        return $this->redirect($this->generateUrl('challenge_feed_back_index'));










    }

}
