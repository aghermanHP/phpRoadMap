<?php


namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginTest extends WebTestCase
{
    public function testLoginAction()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/login',
            [
                "email" => "admin@email.com",
                "password" => "admin",
                "csrf_token" => "\$argon2i\$v=19\$m=65536,t=4,p=1\$UEpFNFVnTWZHTUM4QWFQNw\$MSbEQMK4n7hp+gYFcVVDeRO3hFvnhmyAD0sIn84fDy8"
            ]);
        self::assertEquals(302, $client->getResponse()->getStatusCode());
    }
}