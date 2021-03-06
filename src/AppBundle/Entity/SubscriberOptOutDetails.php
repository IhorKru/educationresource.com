<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\SubscriberDetails;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SubscriberOptOutDetails
 *
 * @ORM\Table(name="03_SubscriberOptOutDetails", uniqueConstraints={@ORM\UniqueConstraint(name="subsc_optout_pkey", columns={"id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberOptOutDetailsRepository")
 */
class SubscriberOptOutDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * 
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="SubscriberDetails")
     */
    private $user;

    /**
     * @var string
     *
     * @Assert\NotBlank (message="Complete Email Address field")
     * @ORM\Column(name="EmailAddress", type="string", length=100)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true,
     *     checkHost = true
     * )
     */
    private $emailaddress;

    /**
     * @var int
     *
     * @ORM\Column(name="resourceid", type="smallint")
     */
    private $resourceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="optoutdate", type="datetime")
     */
    private $optoutdate;

    /**
     * @var string
     *
     * @ORM\Column(name="optoutip", type="string", length=50)
     */
    private $optoutip;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return SubscriberOptOutDetails
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set emailaddress
     *
     * @param string $emailaddress
     *
     * @return SubscriberOptOutDetails
     */
    public function setEmailaddress($emailaddress)
    {
        $this->emailaddress = $emailaddress;

        return $this;
    }

    /**
     * Get emailaddress
     *
     * @return string
     */
    public function getEmailaddress()
    {
        return $this->emailaddress;
    }

    /**
     * Set resourceid
     *
     * @param integer $resourceid
     *
     * @return SubscriberOptOutDetails
     */
    public function setResourceid($resourceid)
    {
        $this->resourceid = $resourceid;

        return $this;
    }

    /**
     * Get resourceid
     *
     * @return integer
     */
    public function getResourceid()
    {
        return $this->resourceid;
    }

    /**
     * Set optoutdate
     *
     * @param \DateTime $optoutdate
     *
     * @return SubscriberOptOutDetails
     */
    public function setOptoutdate($optoutdate)
    {
        $this->optoutdate = $optoutdate;

        return $this;
    }

    /**
     * Get optoutdate
     *
     * @return \DateTime
     */
    public function getOptoutdate()
    {
        return $this->optoutdate;
    }

    /**
     * Set optoutip
     *
     * @param string $optoutip
     *
     * @return SubscriberOptOutDetails
     */
    public function setOptoutip($optoutip)
    {
        $this->optoutip = $optoutip;

        return $this;
    }

    /**
     * Get optoutip
     *
     * @return string
     */
    public function getOptoutip()
    {
        return $this->optoutip;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\SubscriberDetails $id
     *
     * @return SubscriberOptOutDetails
     */
    public function setUser(\AppBundle\Entity\SubscriberDetails $id = null)
    {
        $this->user = $id;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\SubscriberDetails
     */
    public function getUser()
    {
        return $this->user;
    }

}
