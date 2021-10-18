<?php

namespace App\Controller;

use App\Entity\HomePageClient;
use App\Form\HomePageClientType;
use App\Repository\HomePageClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/home/page/client')]
class HomePageClientController extends AbstractController
{
    #[Route('/', name: 'home_page_client_index', methods: ['GET'])]
    public function index(HomePageClientRepository $homePageClientRepository): Response
    {
        return $this->render('home_page_client/index.html.twig', [
            'home_page_clients' => $homePageClientRepository->findAll(),
        ]);
    }

    //    #####   Add  ####

    #[Route('/new', name: 'home_page_client_new', methods: ['GET','POST'])]
    public function new(Request $request): Response
    {
        $homePageClient = new HomePageClient();
        $form = $this->createForm(HomePageClientType::class, $homePageClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homePageClient);
            $entityManager->flush();

            return $this->redirectToRoute('home_page_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('home_page_client/new.html.twig', [
            'home_page_client' => $homePageClient,
            'form' => $form,
        ]);
    }

    //    #####   Show  ####

    #[Route('/{id}', name: 'home_page_client_show', methods: ['GET'])]
    public function show(HomePageClient $homePageClient): Response
    {
        return $this->render('home_page_client/show.html.twig', [
            'home_page_client' => $homePageClient,
        ]);
    }

    //    #####   Edit  ####

    #[Route('/{id}/edit', name: 'home_page_client_edit', methods: ['GET','POST'])]
    public function edit(Request $request, HomePageClient $homePageClient): Response
    {
        $form = $this->createForm(HomePageClientType::class, $homePageClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_page_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('home_page_client/edit.html.twig', [
            'home_page_client' => $homePageClient,
            'form' => $form,
        ]);
    }

    //    #####   Delete  ####

    #[Route('/{id}', name: 'home_page_client_delete', methods: ['POST'])]
    public function delete(Request $request, HomePageClient $homePageClient): Response
    {
        if ($this->isCsrfTokenValid('delete'.$homePageClient->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($homePageClient);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home_page_client_index', [], Response::HTTP_SEE_OTHER);
    }
}

