<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class BlocCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Bloc::class;
    }
 
    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addJsFile('build/script.js')
            ->addCssFile('build/style.css');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('une page métier')
            ->setEntityLabelInPlural('Mes pages métiers')
            ;
    }

    

    public function configureFields(string $pageName): iterable
    {

        return [
            TextField::new('name', 'Libéllé du metier'),
            
            TextEditorField::new('content')->onlyWhenCreating(),
            TextEditorField::new('content')->onlyWhenUpdating(),

            TextEditorField::new('content2')->onlyWhenCreating(),
            TextEditorField::new('content2')->onlyWhenUpdating(),

            TextEditorField::new('content3')->onlyWhenCreating(),
            TextEditorField::new('content3')->onlyWhenUpdating(),

            TextEditorField::new('content4')->onlyWhenCreating(),
            TextEditorField::new('content4')->onlyWhenUpdating(),

            TextEditorField::new('content5')->onlyWhenCreating(),
            TextEditorField::new('content5')->onlyWhenUpdating(),

            TextEditorField::new('content6')->onlyWhenCreating(),
            TextEditorField::new('content6')->onlyWhenUpdating(),


            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenUpdating(),

            TextField::new('description')->onlyWhenCreating(),
            TextField::new('description')->onlyWhenUpdating(),

            TextField::new('imageFile2')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile2')->setFormType(VichImageType::class)->onlyWhenUpdating(),

            TextField::new('description2')->onlyWhenCreating(),
            TextField::new('description2')->onlyWhenUpdating(),

            ImageField::new('path')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
            ImageField::new('path2')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
            ImageField::new('backgroud')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),

            TextField::new('imageFile3')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile3')->setFormType(VichImageType::class)->onlyWhenUpdating(),

        ];
    }
}