<?php

namespace App\Controller;

use App\Repository\SliderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlpEasyGestionController extends AbstractController
{
    /**
     * @var SliderRepository
     */
    private $sliderRepository;

    /**
     * @param SliderRepository $sliderRepository
     */
    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * @Route("/slp/easy/gestion", name="slp_easy_gestion")
     */
    public function index(SliderRepository $sliderRepository): Response
    {

//        construct a variable $slide and find in the repository the first slider
//        $slide = $this->sliderRepository->findOneBy(array('id' => '1'));

        return $this->render('slp_easy_gestion/index.html.twig', [
            'controller_name' => 'SlpEasyGestionController',
            'slides' => $sliderRepository->findAll(),
        ]);
    }
}
