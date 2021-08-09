<?php

namespace App\Tests;

use App\Entity\User;
use App\Entity\Fruit;
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
            ->setRoles(['ROLE_TEST'])
            ->setCreatedAt($dateTimeImmutable)
            ->setUpdatedAt($dateTimeImmutable);

        // Check if i got the same thing with the getter from the setter
        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getFirstname() === 'Firstname');
        $this->assertTrue($user->getLastname() === 'Lastname');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getRoles() === ['ROLE_TEST', 'ROLE_USER']);
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
            ->setRoles(['ROLE_TEST'])
            ->setCreatedAt($dateTimeImmutable)
            ->setUpdatedAt($dateTimeImmutable);

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getFirstname() === 'false');
        $this->assertFalse($user->getLastname() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getRoles() === ['ROLE_FALSE', 'ROLE_USER']);
        $this->assertFalse($user->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($user->getUpdatedAt() === new DateTimeImmutable());
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getId());
        $this->assertEmpty($user->getUserIdentifier());
        $this->assertEmpty($user->getUsername());
        $this->assertEmpty($user->getSalt());
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getLastname());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getCreatedAt());
        $this->assertEmpty($user->getUpdatedAt());
    }
}
