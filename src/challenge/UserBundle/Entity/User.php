<?php

namespace challenge\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="challenge\PaymentBundle\Entity\Orders", mappedBy="user")
     */

    private $orders;

    /**
     * @ORM\Column(name="psn", type="string", length=255)
     * @ORM\JoinColumn(nullable=true)
     */
    private $psn;

    /**
     * @ORM\Column(name="signup_at",type="datetime")
     */

    private $signup_at;


    /**
     * @ORM\Column(name="psnpassword", type="string", length=255)
     */
    protected $psnpassword;

    public function __construct()
    {
        parent::__construct();
        $this->signup_at=new \DateTime();
    }

    /**
     * Set psn
     *
     * @param string $psn
     *
     * @return User
     */
    public function setPsn($psn)
    {
        $this->psn = $psn;

        return $this;
    }

    /**
     * Get psn
     *
     * @return string
     */
    public function getPsn()
    {
        return $this->psn;
    }

    /**
     * Set psnpassword
     *
     * @param string $psnpassword
     *
     * @return User
     */
    public function setPsnpassword($psnpassword)
    {
        $this->psnpassword = $psnpassword;

        return $this;
    }

    /**
     * Get psnpassword
     *
     * @return string
     */
    public function getPsnpassword()
    {
        return $this->psnpassword;
    }

    /**
     * Add order
     *
     * @param \challenge\PaymentBundle\Entity\Orders $order
     *
     * @return User
     */
    public function addOrder(\challenge\PaymentBundle\Entity\Orders $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \challenge\PaymentBundle\Entity\Orders $order
     */
    public function removeOrder(\challenge\PaymentBundle\Entity\Orders $order)
    {
        $this->orders->removeElement($order);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set signupAt
     *
     * @param \DateTime $signupAt
     *
     * @return User
     */
    public function setSignupAt($signupAt)
    {
        $this->signup_at = $signupAt;

        return $this;
    }

    /**
     * Get signupAt
     *
     * @return \DateTime
     */
    public function getSignupAt()
    {
        return $this->signup_at;
    }
}
