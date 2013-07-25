<?php

namespace SquareEnix\RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SquareEnix\RestBundle\Document\Activity;
use SquareEnix\RestBundle\Document\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UserController extends Controller
{
    /**
     * Get information about user activities
     *
     * **Response Format**
     * { "user": {
     *          }
     * }
     *
     * @ApiDoc{
     *      section="Users",
     *      resource=true,
     *      statusCodes={
     *          200="OK"
     *      }
     * }
     *
     * @param $userId
     * @return JsonResponse
     */
    public function getAction($userId)
    {
        $response = new JsonResponse();
        $response->setData(array());
        return $response;
    }
}
