<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeFunctionalTest extends WebTestCase
{
    public function testShouldDisplayHomepage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains(
            'h2',
            '👨‍🌾 Choisissez entre le panier de légumes ou le panier de fruits du mois! 👩‍🌾'
        );
        $this->assertSelectorTextContains(
            'button',
            'Légumes 🥕'
        );
    }
}
