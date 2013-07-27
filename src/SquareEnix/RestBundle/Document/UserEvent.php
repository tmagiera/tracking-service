<?php

namespace SquareEnix\RestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserEvent
 *
 * @MongoDB\EmbeddedDocument
 */
class UserEvent
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\String
     * @Assert\Choice(choices = {"enter", "click", "exit"})
     */
    private $eventName;

    /**
     * @MongoDB\Int
     */
    private $eventCounter;

    /**
     * @MongoDB\String
     */
    private $activityId;

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
     * Set eventName
     *
     * @param string $eventName
     * @return self
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Get eventName
     *
     * @return string $eventName
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set activityId
     *
     * @param string $activityId
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * Get activityId
     *
     * @return string $activityId
     */
    public function getActivityId()
    {
        return $this->activityId;
    }
}
