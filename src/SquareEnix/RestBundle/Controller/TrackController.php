<?php

namespace SquareEnix\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SquareEnix\RestBundle\Document\Track;
use SquareEnix\RestBundle\Document\Activity;
use SquareEnix\RestBundle\Document\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class TrackController extends Controller
{
    /**
     * Add data about User and related Activities
     *
     * @ApiDoc{
     *      section="Track",
     *      resource=true,
     *      statusCodes={
     *          201="Added"
     *      }
     * }
     *
     * @param $activityId
     * @param $userId
     * @param $event
     * @return JsonResponse
     */
    public function putAction($activityId, $userId, $event)
    {
        $track = new Track();
        $track->setActivityId($activityId);
        $track->setUserId($userId);
        $track->setEvent($event);
        $track->setUserAgent($this->getRequest()->headers->get('USER_AGENT'));
        $track->setUserIp($this->getRequest()->getClientIp());

        $validator = $this->get('validator');
        $errors = $validator->validate($track);
        if (count($errors) > 0) {
            $response = new JsonResponse();
            $response->setStatusCode(400);
            return $response;
        }

        $activity = new Activity();
        $activity->setEvent()

        $user = new User();
        $user->setActivityCounter(1);

        $em = $this->get('doctrine_mongodb')->getManager();
        $em->persist($track);
        $em->persist($activity);
        $em->persist($user);

        $em->flush();

        $response = new JsonResponse();
        $response->setStatusCode(201);
        return $response;
    }
}
