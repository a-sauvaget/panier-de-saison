<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Fruit;
use App\Entity\Legume;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Utilisation de faker pour générer des données aléatoires
 * @link: https://fakerphp.github.io/
 */

use Faker\Factory;

/**
 * @link: https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 * @codeCoverageIgnore
 */
class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create('fr_FR');

        // Création utilisateur
        $user = new User();

        $user->setEmail('user@test.com')
            ->setFirstname($faker->firstName())
            ->setLastname($faker->lastName())
            ->setRoles(['ROLE_PRODUCT_MANAGER'])
            ->setCreatedAt(new DateTimeImmutable)
            ->setUpdatedAt(new DateTimeImmutable);

        $password = $this->encoder->encodePassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        // Création fruit
        for ($p = 0; $p < 16; $p++) {
            $fruit = new Fruit();

            $fruit->setFruitName($faker->word())
                ->setGenus($faker->word())
                ->setFamily($faker->word())
                ->setImageFile('https://i.ibb.co/DKYVj1y/apple-1239300-1280.jpg')
                ->setCarbohydrates($faker->randomFloat(2, 0, 500))
                ->setProtein($faker->randomFloat(2, 0, 500))
                ->setFat($faker->randomFloat(2, 0, 500))
                ->setFiber($faker->randomFloat(2, 0, 500))
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

            $manager->persist($fruit);
        }

        // Création d'un fruit pour les tests
        $fruit = new Fruit();

        $fruit->setFruitName('Test Fruit')
            ->setGenus($faker->word())
            ->setFamily($faker->word())
            ->setImageFile('https://i.ibb.co/DKYVj1y/apple-1239300-1280.jpg')
            ->setCarbohydrates($faker->randomFloat(2, 0, 500))
            ->setProtein($faker->randomFloat(2, 0, 500))
            ->setFat($faker->randomFloat(2, 0, 500))
            ->setFiber($faker->randomFloat(2, 0, 500))
            ->setSugar($faker->randomFloat(2, 0, 500))
            ->setFiber($faker->randomFloat(2, 0, 500))
            ->setCalories($faker->randomFloat(2, 0, 500))
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
            ->setCreatedAt(new DateTimeImmutable)
            ->setUpdatedAt(new DateTimeImmutable)
            ->setCreatedBy($user);

        $manager->persist($fruit);
        // Création légumes
        for ($p = 0; $p < 16; $p++) {
            $legume = new Legume();

            $legume->setLegumeName($faker->word())
                ->setGenus($faker->word())
                ->setFamily($faker->word())
                ->setImageFile('https://i.ibb.co/GFJwJHK/carrots-2387394-1280.jpg')
                ->setCarbohydrates($faker->randomFloat(2, 0, 500))
                ->setProtein($faker->randomFloat(2, 0, 500))
                ->setFat($faker->randomFloat(2, 0, 500))
                ->setFiber($faker->randomFloat(2, 0, 500))
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

            $manager->persist($legume);
        }

        // Création d'un légume pour les tests
        $legume = new Legume();

        $legume->setLegumeName('Test Legume')
            ->setGenus($faker->word())
            ->setFamily($faker->word())
            ->setImageFile('https://i.ibb.co/GFJwJHK/carrots-2387394-1280.jpg')
            ->setCarbohydrates($faker->randomFloat(2, 0, 500))
            ->setProtein($faker->randomFloat(2, 0, 500))
            ->setFat($faker->randomFloat(2, 0, 500))
            ->setFiber($faker->randomFloat(2, 0, 500))
            ->setSugar($faker->randomFloat(2, 0, 500))
            ->setFiber($faker->randomFloat(2, 0, 500))
            ->setCalories($faker->randomFloat(2, 0, 500))
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
            ->setCreatedAt(new DateTimeImmutable)
            ->setUpdatedAt(new DateTimeImmutable)
            ->setCreatedBy($user);

        $manager->persist($legume);

        $manager->flush();
    }
}
