<?php

namespace App\Controller\Admin;

use App\Entity\HomePageNumberKey;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HomePageNumberKeyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomePageNumberKey::class;
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
