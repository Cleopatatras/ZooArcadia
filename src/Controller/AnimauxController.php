<?php

namespace App\Controller;

use App\Repository\AnimauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnimauxController extends AbstractController
{
    #[Route('/animaux', name: 'app_animaux')]
    public function index(AnimauxRepository $animauxRepository): Response
    {
        $animals = $animauxRepository->findAll();

        return $this->render('animaux/index.html.twig', compact('animals'));

    }
}