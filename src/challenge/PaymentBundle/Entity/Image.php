<?php

namespace challenge\PaymentBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="challenge\PaymentBundle\Entity\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
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
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     *@ORM\OneToOne(targetEntity="challenge\PaymentBundle\Entity\Game",mappedBy="image", cascade={"persist"})
     */
    private $game;

    /**
     *@ORM\OneToOne(targetEntity="challenge\UserBundle\Entity\User",mappedBy="image", cascade={"persist"})
     * 
     */
    private $user;


    private $file;

    private $tempFilename;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file)
    {
        $this->file = $file;


        if (null !== $this->url) {

            $this->tempFilename = $this->url;
            $this->url = null;
            $this->alt = null;
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {

        if (null === $this->file) {
            return;
        }


        $this->url = $this->file->guessExtension();


        $this->alt = $this->file->getClientOriginalName();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {

        if (null === $this->file) {
            return;
        }


        if (null !== $this->tempFilename) {
            $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }


        $this->file->move(
            $this->getUploadRootDir(),
            $this->id.'.'.$this->url
        );
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {

        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {

        if (file_exists($this->tempFilename)) {

            unlink($this->tempFilename);
        }
    }

    public function getUploadDir()
    {

        return 'uploads/img';
    }

    protected function getUploadRootDir()
    {

        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
    }


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
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set game
     *
     * @param \challenge\PaymentBundle\Entity\Game $game
     *
     * @return Image
     */
    public function setGame(\challenge\PaymentBundle\Entity\Game $game = null)
    {
        $this->game = $game;

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
     * Set user
     *
     * @param \challenge\UserBundle\Entity\User $user
     *
     * @return Image
     */
    public function setUser(\challenge\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \challenge\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
