<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route(path: "/admin/habitat", name: "app_admin_habitat_")]
class HabitatController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('admin/habitat/index.html.twig', [
            'controller_name' => 'HabitatController',
        ]);
    }

    #[Route('/ajouter', name: 'add')]
    public function addhabitat(): Response
    {
        return $this->render('admin/habitat/add.html.twig', [
            'controller_name' => 'addHabitatController',
        ]);
    }
}