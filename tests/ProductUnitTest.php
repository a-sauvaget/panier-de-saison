<?php

namespace App\Tests;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\User;
use DatetimeImmutable;
use PHPUnit\Framework\TestCase;

/**
 * @link: https://phpunit.readthedocs.io/fr/latest/assertions.html
 */
class ProductUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $product = new Product();
        $category = new Category();
        $user = new User();
        $datetime = new DatetimeImmutable();

        $product->setProductName('true')
            ->setGenus('true')
            ->setFamily('true')
            ->setImageFile('true')
            ->setCategory($category)
            ->setCarbohydrates('true')
            ->setProtein('true')
            ->setFat('true')
            ->setSugar('true')
            ->setCalories('true')
            ->setHarvestedInJanuary(true)
            ->setHarvestedInFebruary(true)
            ->setHarvestedInMarch(true)
            ->setHarvestedInApril(true)
            ->setHarvestedInMay(true)
            ->setHarvestedInJune(true)
            ->setHarvestedInJuly(true)
            ->setHarvestedInAugust(true)
            ->setHarvestedInSeptember(true)
            ->setHarvestedInOctober(true)
            ->setHarvestedInNovember(true)
            ->setHarvestedInDecember(true)
            ->setCreatedAt($datetime)
            ->setUpdatedAt($datetime)
            ->setCreatedBy($user);

        // Check if i got the same thing with the getter from the setter
        $this->assertTrue($product->getProductName() === 'true');
        $this->assertTrue($product->getGenus() === 'true');
        $this->assertTrue($product->getFamily() === 'true');
        $this->assertTrue($product->getImageFile() === 'true');
        $this->assertTrue($product->getCategory() === $category);
        $this->assertTrue($product->getCarbohydrates() === 'true');
        $this->assertTrue($product->getProtein() === 'true');
        $this->assertTrue($product->getFat() === 'true');
        $this->assertTrue($product->getSugar() === 'true');
        $this->assertTrue($product->getCalories() === 'true');
        $this->assertTrue($product->getHarvestedInJanuary() === true);
        $this->assertTrue($product->getHarvestedInFebruary() === true);
        $this->assertTrue($product->getHarvestedInMarch() === true);
        $this->assertTrue($product->getHarvestedInApril() === true);
        $this->assertTrue($product->getHarvestedInMay() === true);
        $this->assertTrue($product->getHarvestedInJune() === true);
        $this->assertTrue($product->getHarvestedInJuly() === true);
        $this->assertTrue($product->getHarvestedInAugust() === true);
        $this->assertTrue($product->getHarvestedInSeptember() === true);
        $this->assertTrue($product->getHarvestedInOctober() === true);
        $this->assertTrue($product->getHarvestedInNovember() === true);
        $this->assertTrue($product->getHarvestedInDecember() === true);
        $this->assertTrue($product->getCreatedAt() === $datetime);
        $this->assertTrue($product->getUpdatedAt() === $datetime);
        $this->assertTrue($product->getCreatedBy() === $user);
    }

    public function testIsFalse()
    {
        $product = new Product();
        $category = new Category();
        $user = new User();
        $datetime = new DatetimeImmutable();

        $product->setProductName('true')
            ->setGenus('true')
            ->setFamily('true')
            ->setImageFile('true')
            ->setCategory($category)
            ->setCarbohydrates(1.2)
            ->setProtein(1.2)
            ->setFat(1.2)
            ->setSugar(1.2)
            ->setCalories(1.2)
            ->setHarvestedInJanuary(true)
            ->setHarvestedInFebruary(true)
            ->setHarvestedInMarch(true)
            ->setHarvestedInApril(true)
            ->setHarvestedInMay(true)
            ->setHarvestedInJune(true)
            ->setHarvestedInJuly(true)
            ->setHarvestedInAugust(true)
            ->setHarvestedInSeptember(true)
            ->setHarvestedInOctober(true)
            ->setHarvestedInNovember(true)
            ->setHarvestedInDecember(true)
            ->setCreatedAt($datetime)
            ->setUpdatedAt($datetime)
            ->setCreatedBy($user);

        $this->assertFalse($product->getProductName() === 'false');
        $this->assertFalse($product->getGenus() === 'false');
        $this->assertFalse($product->getFamily() === 'false');
        $this->assertFalse($product->getImageFile() === 'false');
        $this->assertFalse($product->getCategory() === new Category());
        $this->assertFalse($product->getCarbohydrates() === true);
        $this->assertFalse($product->getProtein() === true);
        $this->assertFalse($product->getFat() === true);
        $this->assertFalse($product->getSugar() === true);
        $this->assertFalse($product->getCalories() === true);
        $this->assertFalse($product->getHarvestedInJanuary() === false);
        $this->assertFalse($product->getHarvestedInFebruary() === false);
        $this->assertFalse($product->getHarvestedInMarch() === false);
        $this->assertFalse($product->getHarvestedInApril() === false);
        $this->assertFalse($product->getHarvestedInMay() === false);
        $this->assertFalse($product->getHarvestedInJune() === false);
        $this->assertFalse($product->getHarvestedInJuly() === false);
        $this->assertFalse($product->getHarvestedInAugust() === false);
        $this->assertFalse($product->getHarvestedInSeptember() === false);
        $this->assertFalse($product->getHarvestedInOctober() === false);
        $this->assertFalse($product->getHarvestedInNovember() === false);
        $this->assertFalse($product->getHarvestedInDecember() === false);
        $this->assertFalse($product->getCreatedAt() === new DatetimeImmutable());
        $this->assertFalse($product->getUpdatedAt()  === new DatetimeImmutable());
        $this->assertFalse($product->getCreatedBy() === new User());
    }

    public function testIsEmpty()
    {
        $product = new Product();

        $this->assertEmpty($product->getProductName());
        $this->assertEmpty($product->getGenus());
        $this->assertEmpty($product->getFamily());
        $this->assertEmpty($product->getImageFile());
        $this->assertEmpty($product->getCategory());
        $this->assertEmpty($product->getCarbohydrates());
        $this->assertEmpty($product->getProtein());
        $this->assertEmpty($product->getFat());
        $this->assertEmpty($product->getSugar());
        $this->assertEmpty($product->getCalories());
        $this->assertEmpty($product->getHarvestedInJanuary());
        $this->assertEmpty($product->getHarvestedInFebruary());
        $this->assertEmpty($product->getHarvestedInMarch());
        $this->assertEmpty($product->getHarvestedInApril());
        $this->assertEmpty($product->getHarvestedInMay());
        $this->assertEmpty($product->getHarvestedInJune());
        $this->assertEmpty($product->getHarvestedInJuly());
        $this->assertEmpty($product->getHarvestedInAugust());
        $this->assertEmpty($product->getHarvestedInSeptember());
        $this->assertEmpty($product->getHarvestedInOctober());
        $this->assertEmpty($product->getHarvestedInNovember());
        $this->assertEmpty($product->getHarvestedInDecember());
        $this->assertEmpty($product->getCreatedAt());
        $this->assertEmpty($product->getUpdatedAt());
        $this->assertEmpty($product->getCreatedBy());
    }
}
