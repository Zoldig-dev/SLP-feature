<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use App\Entity\PageCustom;
use App\Repository\PageCustomRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichImageType;

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

            TextField::new('name'),
            TextareaField::new('content'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenUpdating(),
            ImageField::new('path')->setBasePath('/uploads/images/bloc')->onlyOnIndex(),

        ];
    }
}
