<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactFunctionalTest extends WebTestCase
{
    public function testShouldDisplayContactPage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contact');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Contact');
        $this->assertSelectorTextContains('button', 'Envoyer');
    }
}
