<?php

namespace App\Controller\Admin;

use App\Entity\Legume;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class LegumeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Legume::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Legume_Name'),
            TextField::new('Genus'),
            TextField::new('Family'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            ImageField::new('file')->setBasePath('/uploads/product')->onlyOnIndex(),
            NumberField::new('Carbohydrates'),
            NumberField::new('Sugar'),
            NumberField::new('Fiber'),
            NumberField::new('Fat'),
            NumberField::new('Protein'),
            NumberField::new('Calories'),
            BooleanField::new('Harvested_In_January')->hideOnIndex(),
            BooleanField::new('Harvested_In_February')->hideOnIndex(),
            BooleanField::new('Harvested_In_March')->hideOnIndex(),
            BooleanField::new('Harvested_In_April')->hideOnIndex(),
            BooleanField::new('Harvested_In_May')->hideOnIndex(),
            BooleanField::new('Harvested_In_June')->hideOnIndex(),
            BooleanField::new('Harvested_In_July')->hideOnIndex(),
            BooleanField::new('Harvested_In_August')->hideOnIndex(),
            BooleanField::new('Harvested_In_September')->hideOnIndex(),
            BooleanField::new('Harvested_In_October')->hideOnIndex(),
            BooleanField::new('Harvested_In_November')->hideOnIndex(),
            BooleanField::new('Harvested_In_December')->hideOnIndex(),
            DateTimeField::new('createdAt'),
            DateTimeField::new('updatedAt')
        ];
    }
}
