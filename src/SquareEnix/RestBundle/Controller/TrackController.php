<?php

namespace SquareEnix\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SquareEnix\RestBundle\Entity\Track;
use SquareEnix\RestBundle\Entity\Activity;
use SquareEnix\RestBundle\Entity\User;
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
        // TODO: validation

        $activity = new Activity();
        $activity->setEventCounter(1);

        $user = new User();
        $user->setActivityCounter(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($track);
        $em->persist($activity);
        $em->persist($user);

        $em->flush();

        $response = new JsonResponse();
        $response->setStatusCode(201);
        return $response;
    }
}
