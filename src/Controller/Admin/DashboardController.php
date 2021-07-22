<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\CategoryArticle;
use App\Entity\CategoryProject;
use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Les projets', 'fas fa-list', Project::class);
        yield MenuItem::linkToCrud('Les articles', 'fas fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Catégories projets', 'fas fa-tag', CategoryProject::class);
        yield MenuItem::linkToCrud('Catégories articles', 'fas fa-hashtag', CategoryArticle::class);
    }
}
