<?php

namespace SquareEnix\RestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Activity
 *
 * @MongoDB\EmbeddedDocument
 */
class Activity
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Int
     */
    private $eventCounter;

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
     * Set eventCounter
     *
     * @param integer $eventCounter
     * @return Activity
     */
    public function setEventCounter($eventCounter)
    {
        $this->eventCounter = $eventCounter;
    
        return $this;
    }

    /**
     * Get eventCounter
     *
     * @return integer 
     */
    public function getEventCounter()
    {
        return $this->eventCounter;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Activity
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
