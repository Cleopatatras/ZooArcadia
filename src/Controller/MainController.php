<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/admin/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('main/dashboard.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}