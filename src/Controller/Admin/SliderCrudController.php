<?php

namespace App\Controller\Admin;

use App\Entity\Slider;
use App\Form\SliderImagesType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

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
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenUpdating(),
            ImageField::new('name')->setBasePath('/uploads/images/slider')->onlyOnIndex(),
//            SlugField::new('slug')->setTargetFieldName('name'),
        ];
    }
}
