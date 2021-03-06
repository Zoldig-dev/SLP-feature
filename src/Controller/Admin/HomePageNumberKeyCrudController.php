<?php

namespace App\Controller\Admin;

use App\Entity\HomePageNumberKey;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;


class HomePageNumberKeyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomePageNumberKey::class;
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Nos chiffres importants')
            ->setEntityLabelInSingular('nos chiffres importants')
            ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable('new')
            ->disable('delete')
            ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            NumberField::new('productNumber','Produits Référencés'),
            NumberField::new('storeNumber','Magasins réalisés'),
            NumberField::new('packageNumber','Colis envoyés par an'),

        ];
    }

}

