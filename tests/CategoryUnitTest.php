<?php

namespace App\Tests;

use App\Entity\Category;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

/**
 * @link: https://phpunit.readthedocs.io/fr/latest/assertions.html
 */
class CategoryUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $category = new Category();
        $datetime = new DateTimeImmutable();

        $category->setCategoryName('true')
            ->setCreatedAt($datetime)
            ->setUpdatedAt($datetime);
        // Check if i got the same thing with the getter from the setter
        $this->assertTrue($category->getCategoryName() === 'true');
        $this->assertTrue($category->getCreatedAt() === $datetime);
        $this->assertTrue($category->getUpdatedAt() === $datetime);
    }

    public function testIsFalse()
    {
        $category = new Category();
        $datetime = new DateTimeImmutable();

        $category->setCategoryName('true')
            ->setCreatedAt($datetime)
            ->setUpdatedAt($datetime);

        $this->assertFalse($category->getCategoryName() === 'false');
        $this->assertFalse($category->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($category->getUpdatedAt() === new DateTimeImmutable());
    }

    public function testIsEmpty()
    {
        $category = new Category();

        $this->assertEmpty($category->getCategoryName());
        $this->assertEmpty($category->getCreatedAt());
        $this->assertEmpty($category->getUpdatedAt());
    }
}
