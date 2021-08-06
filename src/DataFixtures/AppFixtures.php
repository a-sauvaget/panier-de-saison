<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\Product;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 *  @link: https://fakerphp.github.io/
 */

use Faker\Factory;

/**
 * @link: https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 */
class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create('fr_FR');

        // Création utilisateurs
        $user = new User();

        $user->setEmail('user@test.com')
            ->setFirstname($faker->firstName())
            ->setLastname($faker->lastName())
            ->setPassword('user_test')
            ->setRoles(['ROLE_PRODUCT_MANAGER'])
            ->setCreatedAt(new DateTimeImmutable)
            ->setUpdatedAt(new DateTimeImmutable);

        $manager->persist($user);

        // Création catégories
        for ($k = 0; $k < 5; $k++) {
            $category = new Category();

            $category->setCategoryName($faker->word())
                ->setCreatedAt(new DateTimeImmutable)
                ->setUpdatedAt(new DateTimeImmutable);

            $manager->persist($category);
        }

        // Création product
        for ($p = 0; $p < 20; $p++) {
            $product = new Product();

            $product->setProductName($faker->word())
                ->setGenus($faker->word())
                ->setFamily($faker->word())
                ->setImageFile('https://i.ibb.co/DKYVj1y/apple-1239300-1280.jpg')
                ->setCategory($category)
                ->setCarbohydrates($faker->randomFloat(2, 0, 500))
                ->setProtein($faker->randomFloat(2, 0, 500))
                ->setFat($faker->randomFloat(2, 0, 500))
                ->setSugar($faker->randomFloat(2, 0, 500))
                ->setFiber($faker->randomFloat(2, 0, 500))
                ->setCalories($faker->randomFloat(2, 0, 500))
                ->setHarvestedInJanuary($faker->boolean())
                ->setHarvestedInFebruary($faker->boolean())
                ->setHarvestedInMarch($faker->boolean())
                ->setHarvestedInApril($faker->boolean())
                ->setHarvestedInMay($faker->boolean())
                ->setHarvestedInJune($faker->boolean())
                ->setHarvestedInJuly($faker->boolean())
                ->setHarvestedInAugust($faker->boolean())
                ->setHarvestedInSeptember($faker->boolean())
                ->setHarvestedInOctober($faker->boolean())
                ->setHarvestedInNovember($faker->boolean())
                ->setHarvestedInDecember($faker->boolean())
                ->setCreatedAt(new DateTimeImmutable)
                ->setUpdatedAt(new DateTimeImmutable)
                ->setCreatedBy($user);

            $manager->persist($product);
        }

        $manager->flush();
    }
}
