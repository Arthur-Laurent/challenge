<?php

namespace challenge\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="challenge\PaymentBundle\Entity\FormuleRepository")
 */
class Formule
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
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="challenge\PaymentBundle\Entity\Game",inversedBy="formule" ,cascade={"persist"})
     */

    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="challenge\PaymentBundle\Entity\Lobby",inversedBy="formule", cascade={"persist"})
     */

    private $lobby;

    /**
     * @ORM\OneToMany(targetEntity="challenge\PaymentBundle\Entity\Orders",mappedBy="formule", cascade={"persist"}))
     *
     */

    private $orders;

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
     * Set prix
     *
     * @param float $prix
     *
     * @return Formule
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Formule
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
     * Set game
     *
     * @param \challenge\PaymentBundle\Entity\Game $game
     *
     * @return Formule
     */
    public function setGame(\challenge\PaymentBundle\Entity\Game $game = null)
    {
        $this->game = $game;
        $game->addFormule($this);
        return $this;
    }

    /**
     * Get game
     *
     * @return \challenge\PaymentBundle\Entity\Game
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set lobby
     *
     * @param \challenge\PaymentBundle\Entity\Lobby $lobby
     *
     * @return Formule
     */
    public function setLobby(\challenge\PaymentBundle\Entity\Lobby $lobby = null)
    {
        $this->lobby = $lobby;
        $lobby->addFormule($this);
        return $this;
    }

    /**
     * Get lobby
     *
     * @return \challenge\PaymentBundle\Entity\Lobby
     */
    public function getLobby()
    {
        return $this->lobby;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formule = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add order
     *
     * @param \challenge\PaymentBundle\Entity\Orders $order
     *
     * @return Formule
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
}
