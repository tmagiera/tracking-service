<?php

namespace SquareEnix\RestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testGet()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/v1/user/1');
        $this->assertRegExp('/\[\]/', $client->getResponse()->getContent());
    }
}
