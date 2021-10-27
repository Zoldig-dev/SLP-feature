<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use App\Entity\Clients;
use App\Entity\HomePageNumberKey;
use App\Entity\PageCustom;
use App\Entity\Slider;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/SLPadmin', name: 'admin')]
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(ClientsCrudController::class)->generateUrl();

        return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SLP')
            ->setFaviconPath('build/images/logo-slp.png')
            ->renderContentMaximized(true)
            ->renderSidebarMinimized(false);
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::linkToCrud('Clients', 'fas fa-users', Clients::class);
        yield MenuItem::linkToCrud('Chiffre clés', 'fa fa-cog', HomePageNumberKey::class);
        yield MenuItem::linkToCrud('Métiers', 'fas fa-puzzle-piece', Bloc::class);
        yield MenuItem::linkToCrud('Slider', 'fas fa-camera', Slider::class);

    }

}
