<?php

namespace SquareEnix\RestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Track
 *
 * @MongoDB\Document
 */
class Track
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\String
     */
    private $activityId;

    /**
     * @MongoDB\Int
     */
    private $userId;

    /**
     * @MongoDB\String
     */
    private $event;

    /**
     * @MongoDB\Timestamp
     */
    private $timestamp;

    /**
     * @MongoDB\String
     */
    private $userAgent;

    /**
     * @MongoDB\String
     */
    private $userIp;

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
     * Set activityId
     *
     * @param integer $activityId
     * @return Track
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
    
        return $this;
    }

    /**
     * Get activityId
     *
     * @return integer 
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Track
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set event
     *
     * @param string $event
     * @return Track
     */
    public function setEvent($event)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Track
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

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return Track
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    
        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set userIp
     *
     * @param string $userIp
     * @return Track
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
    
        return $this;
    }

    /**
     * Get userIp
     *
     * @return string 
     */
    public function getUserIp()
    {
        return $this->userIp;
    }
}
