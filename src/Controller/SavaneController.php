<?php

namespace App\Controller;

use App\Repository\AnimauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Animaux;

class SavaneController extends AbstractController
{
    #[Route('/savane', name: 'app_savane')]
    public function index(AnimauxRepository $animauxRepository): Response
    {
        $animals = $animauxRepository->findBy(['habitat' => 2]);

        return $this->render('savane/index.html.twig', compact('animals'));
    }


}
// public function index(AnimauxRepository $animauxRepository): Response
// {
//     $animals = $animauxRepository->findBy(['habitat' => 1]);

//     return $this->render('savane/index.html.twig', compact('animals'));

// }