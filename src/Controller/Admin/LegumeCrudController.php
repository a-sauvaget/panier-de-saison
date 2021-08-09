<?php

namespace App\Controller\Admin;

use App\Entity\Legume;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class LegumeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Legume::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Legume Name'),
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
