<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FruitFunctionalTest extends WebTestCase
{
    public function testShouldDisplayFruits()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/fruits');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Les fruits du mois de:');
    }

    public function testShouldDisplayFruitInfo()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/fruits/Test%20Fruit');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('button', 'Retour');
    }
}
