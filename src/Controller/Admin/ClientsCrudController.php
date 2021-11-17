<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ClientsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clients::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('un client')
            ->setEntityLabelInPlural('Nos clients')
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('name', 'Libélé du client'),
            TextField::new('website', 'Site web'),
            TextField::new('imageFile', 'Logo du client')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile', 'Logo du client')->setFormType(VichImageType::class)->onlyWhenUpdating(),
            ImageField::new('path', 'logo')->setBasePath('/uploads/images/clients')->onlyOnIndex(),
        ];

    }
}