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
        $logistique = $blocRepo->findOneBy(['name' => 'Logistique']);
        $signaletique = $blocRepo->findOneBy(['name' => 'Signalétique']);
        $colisage = $blocRepo->findOneBy(['name' => 'Colisage']);
        $ecommerce = $blocRepo->findOneBy(['name' => 'E-commerce']);
        $approvisionnementReseaux = $blocRepo->findOneBy(['name' => 'Approvisionnement réseaux']);
        $transport = $blocRepo->findOneBy(['name' => 'Transport']);




        return $this->render('metiers/index.html.twig', [
            'controller_name' => 'MetiersController',
            'metiers' => $blocRepo->findAll(),
            'logistique' => $logistique,
            'signaletique' => $signaletique,
            'colisage' => $colisage,
            'ecommerce' => $ecommerce,
            'approvisionnementReseaux' => $approvisionnementReseaux,
            'transport' => $transport,
        ]);
    }

}