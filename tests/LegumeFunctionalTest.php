<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LegumeFunctionalTest extends WebTestCase
{
    public function testShouldDisplayLegumes()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/legumes');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Les légumes du mois de:');
    }

    public function testShouldDisplayLegumeInfo()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/legumes/Test%20Legume');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('button', 'Retour');
    }
}
