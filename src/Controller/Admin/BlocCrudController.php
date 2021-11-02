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

    public static function getEntityFqcn(): string
    {
        return Bloc::class;
    }

    public function configureFields(string $pageName): iterable
    {

        return [
            TextField::new('name'),
            TextEditorField::new('content'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenUpdating(),
            ImageField::new('path')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),
        ];
    }
}