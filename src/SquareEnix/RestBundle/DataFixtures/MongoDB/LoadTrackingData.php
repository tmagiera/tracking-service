<?php

namespace SquareEnix\RestBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SquareEnix\RestBundle\Document\Track;
use SquareEnix\RestBundle\Document\User;
use SquareEnix\RestBundle\Document\Activity;

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

            $activity = new Activity();
            $activity->setEventCounter(rand(1,50));

            $user = new User();
            $user->setActivityCounter(rand(1,5));

            $manager->persist($track);
            $manager->persist($activity);
            $manager->persist($user);
            $manager->flush();
        }
    }
}

?>