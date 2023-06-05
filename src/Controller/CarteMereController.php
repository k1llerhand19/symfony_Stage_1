<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteMereController extends AbstractController
{
    #[Route('/cartemere', name: 'cartemere.show')]
    public function index(): Response
    {
        return $this->render('carte_mere/index.html.twig', [
            'controller_name' => 'CarteMereController',
        ]);
    }

    #[Route('cartemere/ajouter', name: 'cartemere.add')]
    public function AjouterBoitier(): Response
    {
        return $this->render('carte_mere/AjouterCM.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('cartemere/{id}', name: 'cartemere.edit')]
    public function ModifierGPU(): Response
    {
        return $this->render('carte_mere/ModifierCM.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
