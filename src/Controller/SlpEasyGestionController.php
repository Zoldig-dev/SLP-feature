<?php

namespace App\Controller;

use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlpEasyGestionController extends AbstractController
{


    /**
     * @param ImageRepository $imageRepository
     */

    /**
     * @Route("/slp/easy/gestion", name="slp_easy_gestion")
     */
    public function index(ImageRepository $imageRepository): Response
    {
        // la clée doit être changer
        $slide = $imageRepository->findBy(array('slider'=>5));

        return $this->render('slp_easy_gestion/index.html.twig', [
            'controller_name' => 'SlpEasyGestionController',
            'slide' => $slide
        ]);
    }
}
