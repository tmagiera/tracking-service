<?php

namespace SquareEnix\RestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ActivityEvent
 *
 * @MongoDB\EmbeddedDocument
 */
class ActivityEvent
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
}
