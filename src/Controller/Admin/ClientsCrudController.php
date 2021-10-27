<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ClientsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clients::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', label: 'Marque'),
            TextField::new('website', label: 'Site web'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenUpdating(),
            ImageField::new('path', label: 'logo')->setBasePath('/uploads/images/clients')->onlyOnIndex(),
            // A voir si on supprime cette ligne ou pas
//            SlugField::new('slug')->setTargetFieldName('name'),

        ];

    }
}
