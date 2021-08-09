<?php

namespace App\Tests;

use App\Entity\Contact;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

/**
 * @link: https://phpunit.readthedocs.io/fr/latest/assertions.html
 */
class ContactUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $contact = new Contact();
        $dateTimeImmutable = new DateTimeImmutable();

        $contact->setEmail('true@test.com')
            ->setNom('Nom')
            ->setMessage('True')
            ->setIsSend(true)
            ->setCreatedAt($dateTimeImmutable);

        // Check if i got the same thing with the getter from the setter
        $this->assertTrue($contact->getEmail() === 'true@test.com');
        $this->assertTrue($contact->getNom() === 'Nom');
        $this->assertTrue($contact->getMessage() === 'True');
        $this->assertTrue($contact->getIsSend() === true);
        $this->assertTrue($contact->getCreatedAt() === $dateTimeImmutable);
    }

    public function testIsFalse()
    {
        $contact = new Contact();
        $dateTimeImmutable = new DateTimeImmutable();

        $contact->setEmail('true@test.com')
            ->setNom('Nom')
            ->setMessage('True')
            ->setIsSend(true)
            ->setCreatedAt($dateTimeImmutable);

        $this->assertFalse($contact->getEmail() === 'false@test.com');
        $this->assertFalse($contact->getNom() === 'false');
        $this->assertFalse($contact->getMessage() === 'false');
        $this->assertFalse($contact->getIsSend() === false);
        $this->assertFalse($contact->getCreatedAt() === new DateTimeImmutable());
    }

    public function testIsEmpty()
    {
        $contact = new Contact();

        $this->assertEmpty($contact->getEmail());
        $this->assertEmpty($contact->getNom());
        $this->assertEmpty($contact->getMessage());
        $this->assertEmpty($contact->getCreatedAt());
        $this->assertEmpty($contact->getId());
    }
}
