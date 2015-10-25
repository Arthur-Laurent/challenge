<?php

namespace challenge\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lobby
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="challenge\PaymentBundle\Entity\LobbyRepository")
 */
class Lobby
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="challenge\PaymentBundle\Entity\Orders",mappedBy="lobby", cascade={"persist"})
     */

    private $orders;

    /**
     * @ORM\OneToMany(targetEntity="challenge\PaymentBundle\Entity\Formule",mappedBy="lobby", cascade={"persist"})
     */

    private $formule;





    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lobby
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * Set description
     *
     * @param string $description
     *
     * @return Lobby
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Set orders
     *
     * @param \challenge\PaymentBundle\Entity\Orders $orders
     *
     * @return Lobby
     */
    public function setOrders(\challenge\PaymentBundle\Entity\Orders $orders = null)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return \challenge\PaymentBundle\Entity\Orders
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add order
     *
     * @param \challenge\PaymentBundle\Entity\Orders $order
     *
     * @return Lobby
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
     * Add formule
     *
     * @param \challenge\PaymentBundle\Entity\Formule $formule
     *
     * @return Lobby
     */
    public function addFormule(\challenge\PaymentBundle\Entity\Formule $formule)
    {
        $this->formule[] = $formule;

        return $this;
    }

    /**
     * Remove formule
     *
     * @param \challenge\PaymentBundle\Entity\Formule $formule
     */
    public function removeFormule(\challenge\PaymentBundle\Entity\Formule $formule)
    {
        $this->formule->removeElement($formule);
    }

    /**
     * Get formule
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormule()
    {
        return $this->formule;
    }
}
