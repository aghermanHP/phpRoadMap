<?php


namespace App\Tests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class JobTests extends WebTestCase
{
    /**
     * A smoke test
     *
     * @return void
     */
    public function testGetLoginResponseHttpOk(): void
    {
        $client = self::createClient();

        $client->request('GET', '/login');

        self::assertEquals(200, $client->getResponse()->getStatusCode());
    }

}