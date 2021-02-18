<?php


namespace App\Tests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;


class JobTest extends WebTestCase
{
    /**
     * A smoke test
     *
     * @return void
     */
    public function testGetLoginResponseHttpOk(): void
    {

        $client = self::createClient();
        $session = new Session(new MockArraySessionStorage());
        $session->start();

        $client->setServerParameter("MOCKSESSID", $session);

        $client->request('POST', '/job/create', [
            "id" => 1,
            "companyName" => "Sensio Labs",
            "description" => "You've already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.",
            "email" => "job@example.com",
            "How to apply" => "Send your resume to fabien.potencier [at] sensio.com",
            "Location" => "Paris, France"
        ]);

        dd($client->getRequest());
        self::assertEquals(200, $client->getResponse()->getStatusCode());
    }

}