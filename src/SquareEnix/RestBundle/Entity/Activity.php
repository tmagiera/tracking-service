<?php

namespace SquareEnix\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Activity
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
     * @ORM\Column(name="event_counter", type="integer")
     */
    private $eventCounter;

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
