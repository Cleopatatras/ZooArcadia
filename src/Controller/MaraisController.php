<?php

namespace App\Controller;

use App\Repository\AnimauxRepository;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MaraisController extends AbstractController
{
    #[Route('/marais', name: 'app_marais')]
    public function index(AnimauxRepository $animauxRepository): Response
    {
        $animals = $animauxRepository->FindBy(['habitat' => 3]);

        return $this->render('marais/index.html.twig', compact('animals'));
    }
}