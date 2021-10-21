<?php

namespace App\Controller;

use App\Repository\BlocRepository;
use App\Repository\PageCustomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MetiersController extends AbstractController
{
    /**
     * @var BlocRepository
     */
    private $blocRepo;
    /**
     * @var PageCustomRepository
     */
    private $pageRepo;

    /**
     * @param BlocRepository $blocRepo
     * @param PageCustomRepository $pageRepo
     */
    public function __construct(BlocRepository $blocRepo, PageCustomRepository $pageRepo)
    {
        $this->blocRepo = $blocRepo;
        $this->pageRepo = $pageRepo;
    }

    #[Route('/metiers', name: 'metiers')]
    public function index(): Response
    {
        $pageCustom = $this->pageRepo->findAll();
        $blocsL = $this->blocRepo->findBy(array('pageCustom' => 'logistique'));


        return $this->render('metiers/index.html.twig', [
            'controller_name' => 'MetiersController',
            'metiers' => $pageCustom,
            'blocs' => $blocs,
        ]);
    }
}
