<?php
/**
 * Created by PhpStorm.
 * User: pbborel
 * Date: 10/11/2015
 * Time: 15:45
 */

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class UserRestControllerTest extends WebTestCase {

    public function testAPIResponse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/user/casier');

        $response = $client->getResponse();

        $this->assertJsonResponse($response, 200);
    }

    protected function assertJsonResponse($response, $statusCode = 200)
    {
        $this->assertEquals(
            $statusCode, $response->getStatusCode(),
            $response->getContent()
        );
        $this->assertTrue(
            $response->headers->contains('Content-Type', 'application/json'),
            $response->headers
        );
    }

}