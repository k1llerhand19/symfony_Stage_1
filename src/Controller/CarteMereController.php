<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteMereController extends AbstractController
{
    #[Route('/carte/mere', name: 'app_carte_mere')]
    public function index(): Response
    {
        return $this->render('carte_mere/index.html.twig', [
            'controller_name' => 'CarteMereController',
        ]);
    }

    #[Route('/AjouterCM', name: 'app_AjouterCM')]
    public function AjouterBoitier(): Response
    {
        return $this->render('carte_mere/AjouterCM.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/ModifierGPU', name: 'app_ModifierCM')]
    public function ModifierGPU(): Response
    {
        return $this->render('carte_mere/ModifierCM.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
