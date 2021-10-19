<?php

namespace App\Controller\Admin;

use App\Entity\PageCustom;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PageCustomCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PageCustom::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
