<?php

namespace App\Controller;

use App\Repository\AnimauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/animaux', name: 'app_animaux_')]
class AnimauxController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(AnimauxRepository $animauxRepository): Response
    {
        $animals = $animauxRepository->findAll();

        return $this->render('animaux/index.html.twig', compact('animals'));

    }

    // public function savane(AnimauxRepository $animauxRepository): Response
    // {
    //     $savanes = $animauxRepository->findBy(['habitat' => 1]);

    //     return $this->render('savane/index.html.twig', compact('savanes'));

    // }
    // #[Route('/{id}', name: 'id')]
    // public function animalId(AnimauxRepository $animauxRepository): Response
    // {
    //     $animal = $animauxRepository->findOneBy(['id' => $animauxRepository->getId()]);

    //     return $this->render('animaux/animalId.html.twig', compact('animals'));

    // }
}