<?php

namespace SquareEnix\RestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * User
 *
 * @MongoDB\Document
 */
class User
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Int
     */
    private $activityCounter;

    /**
     * @MongoDB\Timestamp
     */
    private $timestamp;

    /**
     * @MongoDB\PrePersist
     * @MongoDB\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->timestamp = time();
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
