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
     * @ORM\Column(name="psn", type="string", length=255)
     */
    private $psn;

    /**
     * @ORM\Column(name="psnpassword", type="string", length=255)
     */
    protected $psnpassword;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
}
