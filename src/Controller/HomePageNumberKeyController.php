<?php

namespace App\Controller;

use App\Entity\HomePageNumberKey;
use App\Form\HomePageNumberKeyType;
use App\Repository\HomePageNumberKeyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/home/page/number/key')]
class HomePageNumberKeyController extends AbstractController
{
    #[Route('/', name: 'home_page_number_key_index', methods: ['GET'])]
    public function index(HomePageNumberKeyRepository $homePageNumberKeyRepository): Response
    {
        return $this->render('home_page_number_key/index.html.twig', [
            'home_page_number_keys' => $homePageNumberKeyRepository->findAll(),
        ]);
    }

//    #####   Add  ####

    #[Route('/new', name: 'home_page_number_key_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $homePageNumberKey = new HomePageNumberKey();
        $form = $this->createForm(HomePageNumberKeyType::class, $homePageNumberKey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($homePageNumberKey);
            $entityManager->flush();

            return $this->redirectToRoute('home_page_number_key_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('home_page_number_key/new.html.twig', [
            'home_page_number_key' => $homePageNumberKey,
            'form' => $form,
        ]);
    }

//    #####   Show  ####

    #[Route('/{id}', name: 'home_page_number_key_show', methods: ['GET'])]
    public function show(HomePageNumberKey $homePageNumberKey): Response
    {
        return $this->render('home_page_number_key/show.html.twig', [
            'home_page_number_key' => $homePageNumberKey,
        ]);
    }


//    #####   Edit  ####

    #[Route('/{id}/edit', name: 'home_page_number_key_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, HomePageNumberKey $homePageNumberKey): Response
    {
        $form = $this->createForm(HomePageNumberKeyType::class, $homePageNumberKey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home_page_number_key_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('home_page_number_key/edit.html.twig', [
            'home_page_number_key' => $homePageNumberKey,
            'form' => $form,
        ]);
    }

//    #####   Delete  ####

    #[Route('/{id}', name: 'home_page_number_key_delete', methods: ['POST'])]
    public function delete(Request $request, HomePageNumberKey $homePageNumberKey): Response
    {
        if ($this->isCsrfTokenValid('delete' . $homePageNumberKey->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($homePageNumberKey);
            $entityManager->flush();
        }

        return $this->redirectToRoute('home_page_number_key_index', [], Response::HTTP_SEE_OTHER);
    }
}
