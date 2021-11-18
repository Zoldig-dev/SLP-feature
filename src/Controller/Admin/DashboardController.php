<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use App\Entity\Clients;
use App\Entity\HomePageNumberKey;
use App\Entity\Slider;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/SLPadmin", name="admin")
     */

    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(HomePageNumberKeyCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SLP')
            ->setFaviconPath('build/images/favicon.ico')
            ->renderContentMaximized(true)
            ->renderSidebarMinimized(false);
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::section('Accueil', 'fa fa-minus');
        yield MenuItem::linkToCrud('Nos chiffres importants', 'fa fa-cog', HomePageNumberKey::class);
        yield MenuItem::linkToCrud('Nos clients', 'fas fa-users', Clients::class);
        yield MenuItem::section('Metiers', 'fa fa-minus');
        yield MenuItem::linkToCrud('Mes pages métiers', 'fas fa-puzzle-piece', Bloc::class);
        yield MenuItem::section('Autres', 'fa fa-minus');
        yield MenuItem::linkToCrud('Mes Sliders', 'fas fa-camera', Slider::class);

    }

}