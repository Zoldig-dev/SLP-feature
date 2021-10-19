<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlocCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Bloc::class;
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
