<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use App\Repository\HomePageNumberKeyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var HomePageNumberKeyRepository
     */
    private $numberKeyRepository;

    /**
     * @param EntityManagerInterface $em
     * @param HomePageNumberKeyRepository $numberKeyRepository
     */
    public function __construct(EntityManagerInterface $em, HomePageNumberKeyRepository $numberKeyRepository)
    {
        $this->em = $em;
        $this->numberKeyRepository = $numberKeyRepository;
    }

    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request): Response
    {

        $contact= new Contact();
        $contact->setCreatedAt(new \DateTimeImmutable());
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($contact);
            $this->em->flush();
            return $this->redirectToRoute('home');
        }

        $numbers=$this->numberKeyRepository->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form->createView(),
            'numberKeys' => $numbers
        ]);
    }
}
