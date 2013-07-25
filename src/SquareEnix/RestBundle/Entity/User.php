<?php

namespace SquareEnix\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class User
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
     * @var integer
     *
     * @ORM\Column(name="activity_counter", type="integer")
     */
    private $activityCounter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetimetz")
     */
    private $timestamp;

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->timestamp = new \DateTime();
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
     * Set activityCounter
     *
     * @param integer $activityCounter
     * @return User
     */
    public function setActivityCounter($activityCounter)
    {
        $this->activityCounter = $activityCounter;
    
        return $this;
    }

    /**
     * Get activityCounter
     *
     * @return integer 
     */
    public function getActivityCounter()
    {
        return $this->activityCounter;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return User
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
