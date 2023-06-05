<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SSDController extends AbstractController
{
    #[Route('/ssd', name: 'ssd.show')]
    public function index(): Response
    {
        return $this->render('ssd/index.html.twig', [
            'controller_name' => 'SSDController',
        ]);
    }

    #[Route('ssd/ajouter', name: 'ssd.add')]
    public function AjouterSSD(): Response
    {
        return $this->render('ssd/AjouterSSD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('ssd/{id}', name: 'ssd.edit')]
    public function ModifierSSD(): Response
    {
        return $this->render('ssd/ModifierSSD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
