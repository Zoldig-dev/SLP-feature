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
 
    // public function configureAssets(Assets $assets): Assets
    // {
    //     return $assets
    //         ->addJsFile('build/script.js')
    //         ->addCssFile('build/style.css');
    // }

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

            TextEditorField::new('content', 'Contenu texte 1')->onlyOnForms(),
            TextEditorField::new('content2', 'Contenu texte 2')->onlyOnForms(),
            TextEditorField::new('content3', 'Contenu texte 3')->onlyOnForms(),
            TextEditorField::new('content4', 'Contenu texte 4')->onlyOnForms(),
            TextEditorField::new('content5', 'Contenu texte 5')->onlyOnForms(),
            TextEditorField::new('content6', 'Contenu texte 6')->onlyOnForms(),

            TextField::new('imageFile', 'Image 1, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile', 'Image 1, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenUpdating(),

            TextField::new('description', 'Description image 1')->onlyOnForms(),

            TextField::new('imageFile2', 'Image 2, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile2', 'Image 2, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenUpdating(),

            TextField::new('description2', 'Description image 2')->onlyOnForms(),

            ImageField::new('path', 'Image 1')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
            ImageField::new('path2', 'Image 2')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
            ImageField::new('backgroud', 'Image de fond')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),

            TextField::new('imageFile3', 'Image de fond, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile3', 'Image de fond, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenUpdating(),

        ];
    }
}