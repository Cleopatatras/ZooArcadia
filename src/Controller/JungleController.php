<?php

namespace App\Controller;

use App\Repository\AnimauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class JungleController extends AbstractController
{
    #[Route('/jungle', name: 'app_jungle')]
    public function index(AnimauxRepository $animauxRepository): Response
    {
        $animals = $animauxRepository->findBy(['habitat' => 1]);
        return $this->render('jungle/index.html.twig', compact('animals'));

    }
}