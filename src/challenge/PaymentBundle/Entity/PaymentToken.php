<?php

namespace challenge\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Token;

/**
 * @ORM\Table(name="paymentsecurity")
 * @ORM\Entity
 */
class PaymentToken extends Token
{

}