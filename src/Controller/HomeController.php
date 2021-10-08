<?php

namespace App\Controller;
use App\Repository\HomePageClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private HomePageClientRepository $clientRepository;

    /**
     * @param HomePageClientRepository $clientRepository
     */
    public function __construct(HomePageClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {

        $clients = $this->clientRepository->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'clients' => $clients
        ]);
    }


}


