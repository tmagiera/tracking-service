<?php

namespace SquareEnix\RestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrackControllerTest extends WebTestCase
{
    public function testPutActivityMalformed()
    {
        $client = static::createClient();
        $crawler = $client->request('PUT', '/v1/track/act/usr1/event1');
        $this->assertEquals(400, $client->getResponse()->getStatusCode());

        $crawler = $client->request('PUT', '/v1/track/act.5/usr1/event1');
        $this->assertEquals(400, $client->getResponse()->getStatusCode());

        $crawler = $client->request('PUT', '/v1/track/abc123abc123abc123/usr1/event1');
        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }

    public function testPut()
    {
        $client = static::createClient();
        $crawler = $client->request('PUT', '/v1/track/act1/usr1/click');
        $this->assertEquals(201, $client->getResponse()->getStatusCode());
    }
}
