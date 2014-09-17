<?php

namespace Vendor\GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity @ORM\Table(name="image_votes")
 **/
class ImgVote
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Image of this vote
     *
     * @var Img
     * @ORM\ManyToOne(targetEntity="Vendor\GalleryBundle\Entity\Img")
     */
    protected $img;

    /**
     * Author of the vote
     *
     * @ORM\ManyToOne(targetEntity="Vendor\GalleryBundle\Entity\User")
     * @var User
     */
    protected $voter;

    /**
     * @ORM\Column(type="integer")
     */
    protected $value;

    /**
     * Sets the owner of the vote
     *
     * @param \Vendor\GalleryBundle\Entity\User $voter
     */
    public function setVoter(User $voter)
    {
        $this->voter = $voter;
    }

    /**
     * Gets the owner of the vote
     *
     * @return UserInterface
     */
    public function getVoter()
    {
        return $this->voter;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

}