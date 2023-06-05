<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoitierController extends AbstractController
{
    #[Route('/boitier', name: 'boitier.show')]
    public function index(): Response
    {
        return $this->render('boitier/index.html.twig', [
            'controller_name' => 'BoitierController',
        ]);
    }

    #[Route('boitier/ajouter', name: 'boitier.add')]
    public function AjouterBoitier(): Response
    {
        return $this->render('boitier/AjouterBoitier.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('boitier/{id}', name: 'boitier.edit')]
    public function ModifierBoitier(): Response
    {
        return $this->render('boitier/ModifierBoitier.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
