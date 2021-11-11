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

            TextEditorField::new('content', label:'Contenu texte 1')->onlyOnForms(),
            TextEditorField::new('content2', label:'Contenu texte 2')->onlyOnForms(),
            TextEditorField::new('content3', label:'Contenu texte 3')->onlyOnForms(),
            TextEditorField::new('content4', label:'Contenu texte 4')->onlyOnForms(),
            TextEditorField::new('content5', label:'Contenu texte 5')->onlyOnForms(),
            TextEditorField::new('content6', label:'Contenu texte 6')->onlyOnForms(),

            TextField::new('imageFile', label:'Image 1, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile', label:'Image 1, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenUpdating(),

            TextField::new('description', label:'Description image 1')->onlyOnForms(),

            TextField::new('imageFile2', label:'Image 2, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile2', label:'Image 2, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenUpdating(),

            TextField::new('description2', label:'Description image 2')->onlyOnForms(),

            ImageField::new('path', label:'Image 1')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
            ImageField::new('path2', label:'Image 2')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
            ImageField::new('backgroud', label:'Image de fond')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),

            TextField::new('imageFile3', label:'Image de fond, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile3', label:'Image de fond, taille max 2mg')->setFormType(VichImageType::class)->onlyWhenUpdating(),

        ];
    }
}