<?php

namespace App\Controller\Admin;

use App\Entity\Slider;
use App\Form\SliderImagesType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SliderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Slider::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            CollectionField::new('images')
                ->setEntryType(SliderImagesType::class)
                ->onlyOnForms(),
        ];
    }
}
