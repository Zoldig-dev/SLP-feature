<?php

namespace App\Controller\Admin;

use App\Entity\Slider;
use App\Form\SliderImagesType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
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

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('un slider')
            ->setEntityLabelInPlural('Mes sliders')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom du slider'),
            TextField::new('imageFile', 'Images du slider')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile', 'Images du slider')->setFormType(VichImageType::class)->onlyWhenUpdating(),
            ImageField::new('name')->setBasePath('/uploads/images/slider')->onlyOnIndex(),
        ];
    }
}
