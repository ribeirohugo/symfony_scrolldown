<?php // tests/Controller/DefaultControllerTest.php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testHomePage()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testHomePageEmpty()
    {
        $client = static::createClient();

        $client->request('GET', '/empty');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
?>