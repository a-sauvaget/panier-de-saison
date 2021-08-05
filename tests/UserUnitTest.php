<?php

namespace App\Tests;

use App\Entity\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

/**
 * @link: https://phpunit.readthedocs.io/fr/latest/assertions.html
 */
class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();
        $dateTimeImmutable = new DateTimeImmutable();

        $user->setEmail('true@test.com')
            ->setFirstname('Firstname')
            ->setLastname('Lastname')
            ->setPassword('password')
            ->setCreatedAt($dateTimeImmutable)
            ->setUpdatedAt($dateTimeImmutable);

        // Check if i got the same thing with the getter from the setter
        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getFirstname() === 'Firstname');
        $this->assertTrue($user->getLastname() === 'Lastname');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getCreatedAt() === $dateTimeImmutable);
        $this->assertTrue($user->getUpdatedAt() === $dateTimeImmutable);
    }

    public function testIsFalse()
    {
        $user = new User();
        $dateTimeImmutable = new DateTimeImmutable();

        $user->setEmail('true@test.com')
            ->setFirstname('Firstname')
            ->setLastname('Lastname')
            ->setPassword('password')
            ->setCreatedAt($dateTimeImmutable)
            ->setUpdatedAt($dateTimeImmutable);

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getFirstname() === 'false');
        $this->assertFalse($user->getLastname() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($user->getUpdatedAt() === new DateTimeImmutable());
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getLastname());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getCreatedAt());
        $this->assertEmpty($user->getUpdatedAt());
    }
}
