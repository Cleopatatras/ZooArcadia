<?php

namespace App\Controller\Admin;

use app\Entity\Habitats;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\AddhabitatFormType;


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
        $habitat = new Habitat();

        $habitatForm = $this->createForm(AddhabitatFormType::class, $habitat);

        return $this->render('admin/habitat/add.html.twig', [
            'habitatForm' => $habitatForm->createView(),
        ]);
    }
}