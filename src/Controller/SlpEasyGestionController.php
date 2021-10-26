<?php

namespace App\Controller;

use App\Repository\SliderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlpEasyGestionController extends AbstractController
{


    /**
     * @param SliderRepository $sliderRepository
     */

    /**
     * @Route("/slp/easy/gestion", name="slp_easy_gestion")
     */
    public function index(SliderRepository $sliderRepository): Response
    {
        return $this->render('slp_easy_gestion/index.html.twig', [
            'controller_name' => 'SlpEasyGestionController',
            'slides' => $sliderRepository->findAll(),
        ]);
    }
}
