<?php

namespace SquareEnix\RestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/v1/user/1');

        $this->assertTrue($crawler->filter('html:contains("[")')->count() > 0);
    }
}
