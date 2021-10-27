<?php

namespace App\Controller\Admin;

use App\Entity\HomePageNumberKey;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
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
    public function configureFields(string $pageName): iterable
    {

        return [

            NumberField::new('productNumber',label: 'Produits Référencés'),
            NumberField::new('storeNumber',label: 'Magasins réalisés'),
            NumberField::new('packageNumber',label: 'Colis envoyés par an'),

        ];
    }



    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ;
    }
}
