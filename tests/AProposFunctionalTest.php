<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AProposFunctionalTest extends WebTestCase
{
    public function testShouldDisplayAProposPage()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/a-propos');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Pourquoi manger de saison ?');
    }
}
