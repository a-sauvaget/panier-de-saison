<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginFunctionalTest extends WebTestCase
{
    public function testVisitingWhileLoginIn(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $buttonCrawlerNode = $crawler->selectButton('Se connecter');
        $form = $buttonCrawlerNode->form();

        $form = $buttonCrawlerNode->form([
            'email' => 'user@test.com',
            'password' => 'password'
        ]);

        $client->submit($form);

        $crawler = $client->request('GET', '/login');
        $this->assertResponseIsSuccessful();
    }
}
