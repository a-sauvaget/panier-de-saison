<?php

namespace App\Controller\Admin;

use App\Entity\Fruit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class FruitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Fruit::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Fruit Name'),
            TextField::new('Genus'),
            TextField::new('Family'),
            NumberField::new('Carbohydrates'),
            NumberField::new('Sugar'),
            NumberField::new('Fiber'),
            NumberField::new('Fat'),
            NumberField::new('Calories'),
            DateTimeField::new('updatedAt')
        ];
    }
}
