<?php

namespace SquareEnix\RestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use SquareEnix\RestBundle\Document\ActivityEvent;

/**
 * Activity
 *
 * @MongoDB\Document
 */
class Activity
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Timestamp
     */
    private $createdAt;

    /**
     * @MongoDB\Timestamp
     */
    private $updatedAt;

    /**
     * @MongoDB\EmbedOne(targetDocument="ActivityEvent")
     */
    private $event;

    /**
     * @MongoDB\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = time();
    }

    /**
     * @MongoDB\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = time();
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
     * Set createdAt
     *
     * @param timestamp $createdAt
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return timestamp $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param timestamp $updatedAt
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return timestamp $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set event
     *
     * @param ActivityEvent $event
     * @return self
     */
    public function setEvent(ActivityEvent $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Get event
     *
     * @return ActivityEvent $event
     */
    public function getEvent()
    {
        return $this->event;
    }
}
