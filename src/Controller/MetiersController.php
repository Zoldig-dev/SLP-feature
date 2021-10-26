<?php

namespace App\Controller;

use App\Repository\BlocRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MetiersController extends AbstractController
{

    /**
     * @param BlocRepository $blocRepo
     * @return Response
     */
    #[Route('/metiers', name: 'metiers')]

    public function index(BlocRepository $blocRepo): Response
    {
        return $this->render('metiers/index.html.twig', [
            'controller_name' => 'MetiersController',
            'metiers' => $blocRepo->findAll(),

        ]);
    }

}
