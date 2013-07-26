<?php

namespace SquareEnix\RestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrackControllerTest extends WebTestCase
{
    public function testPut()
    {
        $client = static::createClient();
        $crawler = $client->request('PUT', '/v1/track/act1/usr1/event1');
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }
}
