<?php

namespace App\Tests;

use App\Entity\Legume;
use App\Entity\User;
use DatetimeImmutable;
use PHPUnit\Framework\TestCase;

/**
 * @link: https://phpunit.readthedocs.io/fr/latest/assertions.html
 */
class LegumeUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $legume = new Legume();
        $user = new User();
        $datetime = new DatetimeImmutable();

        $legume->setLegumeName('true')
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
        $this->assertTrue($legume->getLegumeName() === 'true');
        $this->assertTrue($legume->getGenus() === 'true');
        $this->assertTrue($legume->getFamily() === 'true');
        $this->assertTrue($legume->getImageFile() === 'true');
        $this->assertTrue($legume->getCarbohydrates() === 'true');
        $this->assertTrue($legume->getProtein() === 'true');
        $this->assertTrue($legume->getFat() === 'true');
        $this->assertTrue($legume->getSugar() === 'true');
        $this->assertTrue($legume->getCalories() === 'true');
        $this->assertTrue($legume->getFiber() === 'true');
        $this->assertTrue($legume->getHarvestedInJanuary() === true);
        $this->assertTrue($legume->getHarvestedInFebruary() === true);
        $this->assertTrue($legume->getHarvestedInMarch() === true);
        $this->assertTrue($legume->getHarvestedInApril() === true);
        $this->assertTrue($legume->getHarvestedInMay() === true);
        $this->assertTrue($legume->getHarvestedInJune() === true);
        $this->assertTrue($legume->getHarvestedInJuly() === true);
        $this->assertTrue($legume->getHarvestedInAugust() === true);
        $this->assertTrue($legume->getHarvestedInSeptember() === true);
        $this->assertTrue($legume->getHarvestedInOctober() === true);
        $this->assertTrue($legume->getHarvestedInNovember() === true);
        $this->assertTrue($legume->getHarvestedInDecember() === true);
        $this->assertTrue($legume->getCreatedAt() === $datetime);
        $this->assertTrue($legume->getUpdatedAt() === $datetime);
        $this->assertTrue($legume->getCreatedBy() === $user);
    }

    public function testIsFalse()
    {
        $legume = new Legume();
        $user = new User();
        $datetime = new DatetimeImmutable();

        $legume->setLegumeName('true')
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

        $this->assertFalse($legume->getLegumeName() === 'false');
        $this->assertFalse($legume->getGenus() === 'false');
        $this->assertFalse($legume->getFamily() === 'false');
        $this->assertFalse($legume->getImageFile() === 'false');
        $this->assertFalse($legume->getCarbohydrates() === false);
        $this->assertFalse($legume->getProtein() === false);
        $this->assertFalse($legume->getFat() === false);
        $this->assertFalse($legume->getSugar() === false);
        $this->assertFalse($legume->getCalories() === false);
        $this->assertFalse($legume->getFiber() === false);
        $this->assertFalse($legume->getHarvestedInJanuary() === false);
        $this->assertFalse($legume->getHarvestedInFebruary() === false);
        $this->assertFalse($legume->getHarvestedInMarch() === false);
        $this->assertFalse($legume->getHarvestedInApril() === false);
        $this->assertFalse($legume->getHarvestedInMay() === false);
        $this->assertFalse($legume->getHarvestedInJune() === false);
        $this->assertFalse($legume->getHarvestedInJuly() === false);
        $this->assertFalse($legume->getHarvestedInAugust() === false);
        $this->assertFalse($legume->getHarvestedInSeptember() === false);
        $this->assertFalse($legume->getHarvestedInOctober() === false);
        $this->assertFalse($legume->getHarvestedInNovember() === false);
        $this->assertFalse($legume->getHarvestedInDecember() === false);
        $this->assertFalse($legume->getCreatedAt() === new DatetimeImmutable());
        $this->assertFalse($legume->getUpdatedAt()  === new DatetimeImmutable());
        $this->assertFalse($legume->getCreatedBy() === new User());
    }

    public function testIsEmpty()
    {
        $legume = new Legume();

        $this->assertEmpty($legume->getLegumeName());
        $this->assertEmpty($legume->getGenus());
        $this->assertEmpty($legume->getFamily());
        $this->assertEmpty($legume->getImageFile());
        $this->assertEmpty($legume->getCarbohydrates());
        $this->assertEmpty($legume->getProtein());
        $this->assertEmpty($legume->getFat());
        $this->assertEmpty($legume->getSugar());
        $this->assertEmpty($legume->getCalories());
        $this->assertEmpty($legume->getHarvestedInJanuary());
        $this->assertEmpty($legume->getHarvestedInFebruary());
        $this->assertEmpty($legume->getHarvestedInMarch());
        $this->assertEmpty($legume->getHarvestedInApril());
        $this->assertEmpty($legume->getHarvestedInMay());
        $this->assertEmpty($legume->getHarvestedInJune());
        $this->assertEmpty($legume->getHarvestedInJuly());
        $this->assertEmpty($legume->getHarvestedInAugust());
        $this->assertEmpty($legume->getHarvestedInSeptember());
        $this->assertEmpty($legume->getHarvestedInOctober());
        $this->assertEmpty($legume->getHarvestedInNovember());
        $this->assertEmpty($legume->getHarvestedInDecember());
        $this->assertEmpty($legume->getCreatedAt());
        $this->assertEmpty($legume->getUpdatedAt());
        $this->assertEmpty($legume->getCreatedBy());
    }
}
