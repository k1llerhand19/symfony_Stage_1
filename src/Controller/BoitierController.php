<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoitierController extends AbstractController
{
    #[Route('/boitier', name: 'app_boitier')]
    public function index(): Response
    {
        return $this->render('boitier/index.html.twig', [
            'controller_name' => 'BoitierController',
        ]);
    }

    #[Route('/AjouterBoitier', name: 'app_AjouterBoitier')]
    public function AjouterBoitier(): Response
    {
        return $this->render('boitier/AjouterBoitier.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/ModifierBoitier', name: 'app_ModifierBoitier')]
    public function ModifierBoitier(): Response
    {
        return $this->render('boitier/ModifierBoitier.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
