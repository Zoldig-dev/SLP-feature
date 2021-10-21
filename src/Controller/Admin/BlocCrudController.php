<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

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
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ;
    }

    public static function getEntityFqcn(): string
    {
        return Bloc::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextareaField::new('content', "Contenue d'un métier")
                ->setFormType(CKEditorType::class),

            IdField::new('orderList')
                ->setLabel('The Order List'),

        ];
    }
}
