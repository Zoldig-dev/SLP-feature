<?php

namespace App\Controller\Admin;

use App\Entity\Bloc;
use App\Entity\HomePageClient;
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
        $url = $routeBuilder->setController(HomePageClientCrudController::class)->generateUrl();

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

        yield MenuItem::linkToCrud('Number key', 'fa fa-cog', HomePageNumberKey::class);
        yield MenuItem::linkToCrud('Page client', 'far fa-copy', HomePageClient::class);
        yield MenuItem::linkToCrud('Page Custom', 'fas fa-sliders-h', PageCustom::class);
        yield MenuItem::linkToCrud('Bloc', 'fas fa-puzzle-piece', Bloc::class);
        yield MenuItem::linkToCrud('Slider', 'fas fa-camera', Slider::class);

    }

}
