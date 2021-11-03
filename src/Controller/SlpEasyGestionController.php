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
        $slide = $imageRepository->findBy(array('slider'=>5));

        foreach($slide as $img){
            $imgs = ['path'=> $img->getPath(), 'description'=> $img->getDescription()];
        }
        // dd($imgs);
        return $this->render('slp_easy_gestion/index.html.twig', [
            'controller_name' => 'SlpEasyGestionController',
            'imgs' => $imgs
        ]);
    }
}
