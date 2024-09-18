<?php

namespace App\Controller\Admin;

use App\Entity\Habitats;
use App\Form\AddhabitatFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/habitat', name: 'app_admin_habitat_')]
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
    public function addhabitat(Request $request, EntityManagerInterface $em): Response
    {
        $habitat = new Habitats();
        $habitatForm = $this->createForm(AddhabitatFormType::class, $habitat);

        $habitatForm->handleRequest($request);

        if ($habitatForm->isSubmitted() && $habitatForm->isValid()) {
            $em->persist($habitat);
            $em->flush();

            $this->addFlash('success', 'Ajout effectué');


            return $this->redirectToRoute('app_main');
        }

        return $this->render('admin/habitat/add.html.twig', [
            'habitatForm' => $habitatForm->createView(),
        ]);
    }
}