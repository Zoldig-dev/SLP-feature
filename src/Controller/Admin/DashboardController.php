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
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
                $routeBuilder = $this->get(AdminUrlGenerator::class);
                $url = $routeBuilder->setController(BlocCrudController::class)->generateUrl();

                return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SLP');
    }

    public function configureMenuItems(): iterable
    {
//        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Bloc', 'fas fa-puzzle-piece',Bloc::class);
        yield MenuItem::linkToCrud('All Clients', 'far fa-address-card',HomePageClient::class);
        yield MenuItem::linkToCrud('Page Custom', 'fas fa-sliders-h',PageCustom::class);
        yield MenuItem::linkToCrud('Number key', 'far fa-chart-bar',HomePageNumberKey::class);
        yield MenuItem::linkToCrud('Slider', 'fas fa-camera',Slider::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
