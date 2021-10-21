<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use App\Entity\PageCustom;
use App\Repository\PageCustomRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class BlocCrudController extends AbstractCrudController
{
    /**
     * @var PageCustomRepository
     */
    private $pagesRepo;

    /**
     * @param PageCustomRepository $pagesRepo
     */
    public function __construct(PageCustomRepository $pagesRepo)
    {
        $this->pagesRepo = $pagesRepo;
    }


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
        $pages = $this->pagesRepo->findAll();
        $title = [];
        foreach ($pages as $page) {
            $title[] = $page->getTitle();
        }
        $title = array_flip($title);
//        dd($title);

        return [
            TextareaField::new('content', "Contenue d'un métier")
                ->setFormType(CKEditorType::class),

            IdField::new('orderList')
                ->setLabel('The Order List'),

            ChoiceField::new('pageCustom')
                ->setChoices(array($title)),
        ];
    }
}
