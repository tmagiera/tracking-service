<?php

namespace SquareEnix\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SquareEnix\RestBundle\Entity\Activity;
use SquareEnix\RestBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ActivityController extends Controller
{
    /**
     * Get information about Activities
     *
     * **Response Format**
     * { "activities": {
     *          }
     * }
     *
     * @ApiDoc{
     *      section="Activities",
     *      resource=true,
     *      statusCodes={
     *          200="OK"
     *      }
     * }

     * @param $activityId
     * @return JsonResponse
     */
    public function getAction($activityId)
    {
        $response = new JsonResponse();
        $response->setData(array());
        return $response;
    }
}
