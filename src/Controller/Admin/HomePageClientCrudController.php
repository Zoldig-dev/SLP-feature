<?php

namespace App\Controller\Admin;

use App\Entity\HomePageClient;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HomePageClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomePageClient::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            ImageField::new('link')
                ->setUploadDir('assets/images')
        ];
    }
}
