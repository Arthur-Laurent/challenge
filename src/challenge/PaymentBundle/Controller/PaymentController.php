<?php

namespace challenge\PaymentBundle\Controller;

use challenge\PaymentBundle\Entity\Formule;
use challenge\PaymentBundle\Entity\Orders;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Payum\Paypal\ExpressCheckout\Nvp\Api;
use Payum\Core\Registry\RegistryInterface;
use Payum\Core\Request\GetHumanStatus;
use Payum\Core\Security\GenericTokenFactoryInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;


class PaymentController extends Controller
{
    public function preparePaypalExpressCheckoutPaymentAction(Request $request,Formule $formule)
    {
        $user=$this->getUser();
        $paymentName = 'paypal_payment';
        $storage = $this->get('payum')->getStorage('challenge\PaymentBundle\Entity\Orders');
        /** @var $paymentDetails Orders */
        $paymentDetails = $storage->create();
        $paymentDetails->setNumero(uniqid());
        $paymentDetails->setcurrencyCode('EUR');
        $paymentDetails->setamount($formule->getPrix());
        $paymentDetails->setdescription($formule->getLobby()->getDescription());
        $paymentDetails->setuser($user);
        $paymentDetails->setFormule($formule);

        $paymentDetails['PAYMENTREQUEST_0_CURRENCYCODE'] = 'EUR';
        $paymentDetails['PAYMENTREQUEST_0_AMT'] = $formule->getPrix();
        $paymentDetails['NOSHIPPING'] = Api::NOSHIPPING_NOT_DISPLAY_ADDRESS;
        $paymentDetails['REQCONFIRMSHIPPING'] = Api::REQCONFIRMSHIPPING_NOT_REQUIRED;
        $paymentDetails['L_PAYMENTREQUEST_0_ITEMCATEGORY0'] = Api::PAYMENTREQUEST_ITERMCATEGORY_DIGITAL;
        $paymentDetails['L_PAYMENTREQUEST_0_AMT0'] = $formule->getPrix();
        $paymentDetails['L_PAYMENTREQUEST_0_NAME0'] = $formule->getName();
        $paymentDetails['L_PAYMENTREQUEST_0_DESC0'] = $formule->getLobby()->getDescription();
        $storage->update($paymentDetails);
        $captureToken = $this->getTokenFactory()->createCaptureToken(
            $paymentName,
            $paymentDetails,
            'payment_done'
        );
        $paymentDetails['INVNUM'] = $paymentDetails->getId();
        $storage->update($paymentDetails);
        return $this->redirect($captureToken->getTargetUrl());







    }

    public function doneAction(Request $request)
    {
        $storage = $this->get('payum')->getStorage('challenge\PaymentBundle\Entity\Orders');
        $em = $this->getDoctrine()->getManager();
        $token = $this->get('payum.security.http_request_verifier')->verify($request);
        $payment = $this->get('payum')->getGateway($token->getGatewayName());
        $payment->execute($status = new GetHumanStatus($token));

        if($status->isCaptured())
        {

            $order = $status->getFirstModel();
            $order->setPayer(true);
            $storage->update($order);

        }

        return $this->redirect( $this->generateUrl('user_lobby_acheter'));
    }

    /**
     * @return RegistryInterface
     */
    protected function getPayum()
    {
        return $this->get('payum');
    }
    /**
     * @return GenericTokenFactoryInterface
     */
    protected function getTokenFactory()
    {
        return $this->get('payum.security.token_factory');
    }

}