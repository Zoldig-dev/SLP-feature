<?php

namespace App\Controller;

use App\Repository\CustomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomController extends AbstractController
{
    #[Route('/custom', name: 'custom')]
    public function index(CustomRepository $customRepository): Response
    {
        return $this->render('custom/index.html.twig', [
            'customs' => $customRepository->findAll()
        ]);
    }
}
