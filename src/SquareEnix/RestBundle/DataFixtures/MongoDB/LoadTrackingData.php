<?php

namespace SquareEnix\RestBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SquareEnix\RestBundle\Document\Track;
use SquareEnix\RestBundle\Document\User;
use SquareEnix\RestBundle\Document\UserEvent;
use SquareEnix\RestBundle\Document\Activity;
use SquareEnix\RestBundle\Document\ActivityEvent;

class LoadTrackingData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i=0;$i<30;$i++) {
            $track = new Track();
            $track->setActivityId('actId'.rand(1,3));
            $track->setUserId('usrId'.rand(0,100));
            $track->setEvent('event'.rand(1,4));
            $track->setUserAgent('symfonyFixture');
            $track->setUserIp('127.0.0.1');

            $activityEvent = new ActivityEvent();
            $activityEvent->setEventName($track->getEvent());
            $activityEvent->setEventCounter(1);
            $activity = new Activity();
            $activity->setEvent($activityEvent);

            $userEvent = new UserEvent();
            $userEvent->setEventName($track->getEvent());
            $userEvent->setActivityId($track->getActivityId());
            $userEvent->setEventCounter(1);
            $user = new User();
            $user->setEvent($userEvent);

            $manager->persist($track);
            $manager->persist($activity);
            $manager->persist($user);
            $manager->flush();
        }
    }
}

?>