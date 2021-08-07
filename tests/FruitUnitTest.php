<?php

namespace App\Tests;

use App\Entity\Fruit;
use App\Entity\User;
use DatetimeImmutable;
use PHPUnit\Framework\TestCase;

/**
 * @link: https://phpunit.readthedocs.io/fr/latest/assertions.html
 */
class FruitUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $fruit = new Fruit();
        $user = new User();
        $datetime = new DatetimeImmutable();

        $fruit->setFruitName('true')
            ->setGenus('true')
            ->setFamily('true')
            ->setImageFile('true')
            ->setCarbohydrates('true')
            ->setProtein('true')
            ->setFat('true')
            ->setSugar('true')
            ->setCalories('true')
            ->setFiber('true')
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
        $this->assertTrue($fruit->getFruitName() === 'true');
        $this->assertTrue($fruit->getGenus() === 'true');
        $this->assertTrue($fruit->getFamily() === 'true');
        $this->assertTrue($fruit->getImageFile() === 'true');
        $this->assertTrue($fruit->getCarbohydrates() === 'true');
        $this->assertTrue($fruit->getProtein() === 'true');
        $this->assertTrue($fruit->getFat() === 'true');
        $this->assertTrue($fruit->getSugar() === 'true');
        $this->assertTrue($fruit->getCalories() === 'true');
        $this->assertTrue($fruit->getFiber() === 'true');
        $this->assertTrue($fruit->getHarvestedInJanuary() === true);
        $this->assertTrue($fruit->getHarvestedInFebruary() === true);
        $this->assertTrue($fruit->getHarvestedInMarch() === true);
        $this->assertTrue($fruit->getHarvestedInApril() === true);
        $this->assertTrue($fruit->getHarvestedInMay() === true);
        $this->assertTrue($fruit->getHarvestedInJune() === true);
        $this->assertTrue($fruit->getHarvestedInJuly() === true);
        $this->assertTrue($fruit->getHarvestedInAugust() === true);
        $this->assertTrue($fruit->getHarvestedInSeptember() === true);
        $this->assertTrue($fruit->getHarvestedInOctober() === true);
        $this->assertTrue($fruit->getHarvestedInNovember() === true);
        $this->assertTrue($fruit->getHarvestedInDecember() === true);
        $this->assertTrue($fruit->getCreatedAt() === $datetime);
        $this->assertTrue($fruit->getUpdatedAt() === $datetime);
        $this->assertTrue($fruit->getCreatedBy() === $user);
    }

    public function testIsFalse()
    {
        $fruit = new Fruit();
        $user = new User();
        $datetime = new DatetimeImmutable();

        $fruit->setFruitName('true')
            ->setGenus('true')
            ->setFamily('true')
            ->setImageFile('true')
            ->setCarbohydrates(1.2)
            ->setProtein(1.2)
            ->setFat(1.2)
            ->setSugar(1.2)
            ->setCalories(1.2)
            ->setFiber(1.2)
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

        $this->assertFalse($fruit->getFruitName() === 'false');
        $this->assertFalse($fruit->getGenus() === 'false');
        $this->assertFalse($fruit->getFamily() === 'false');
        $this->assertFalse($fruit->getImageFile() === 'false');
        $this->assertFalse($fruit->getCarbohydrates() === false);
        $this->assertFalse($fruit->getProtein() === false);
        $this->assertFalse($fruit->getFat() === false);
        $this->assertFalse($fruit->getSugar() === false);
        $this->assertFalse($fruit->getCalories() === false);
        $this->assertFalse($fruit->getFiber() === false);
        $this->assertFalse($fruit->getHarvestedInJanuary() === false);
        $this->assertFalse($fruit->getHarvestedInFebruary() === false);
        $this->assertFalse($fruit->getHarvestedInMarch() === false);
        $this->assertFalse($fruit->getHarvestedInApril() === false);
        $this->assertFalse($fruit->getHarvestedInMay() === false);
        $this->assertFalse($fruit->getHarvestedInJune() === false);
        $this->assertFalse($fruit->getHarvestedInJuly() === false);
        $this->assertFalse($fruit->getHarvestedInAugust() === false);
        $this->assertFalse($fruit->getHarvestedInSeptember() === false);
        $this->assertFalse($fruit->getHarvestedInOctober() === false);
        $this->assertFalse($fruit->getHarvestedInNovember() === false);
        $this->assertFalse($fruit->getHarvestedInDecember() === false);
        $this->assertFalse($fruit->getCreatedAt() === new DatetimeImmutable());
        $this->assertFalse($fruit->getUpdatedAt()  === new DatetimeImmutable());
        $this->assertFalse($fruit->getCreatedBy() === new User());
    }

    public function testIsEmpty()
    {
        $fruit = new Fruit();

        $this->assertEmpty($fruit->getFruitName());
        $this->assertEmpty($fruit->getGenus());
        $this->assertEmpty($fruit->getFamily());
        $this->assertEmpty($fruit->getImageFile());
        $this->assertEmpty($fruit->getCarbohydrates());
        $this->assertEmpty($fruit->getProtein());
        $this->assertEmpty($fruit->getFat());
        $this->assertEmpty($fruit->getSugar());
        $this->assertEmpty($fruit->getCalories());
        $this->assertEmpty($fruit->getHarvestedInJanuary());
        $this->assertEmpty($fruit->getHarvestedInFebruary());
        $this->assertEmpty($fruit->getHarvestedInMarch());
        $this->assertEmpty($fruit->getHarvestedInApril());
        $this->assertEmpty($fruit->getHarvestedInMay());
        $this->assertEmpty($fruit->getHarvestedInJune());
        $this->assertEmpty($fruit->getHarvestedInJuly());
        $this->assertEmpty($fruit->getHarvestedInAugust());
        $this->assertEmpty($fruit->getHarvestedInSeptember());
        $this->assertEmpty($fruit->getHarvestedInOctober());
        $this->assertEmpty($fruit->getHarvestedInNovember());
        $this->assertEmpty($fruit->getHarvestedInDecember());
        $this->assertEmpty($fruit->getCreatedAt());
        $this->assertEmpty($fruit->getUpdatedAt());
        $this->assertEmpty($fruit->getCreatedBy());
    }
}
