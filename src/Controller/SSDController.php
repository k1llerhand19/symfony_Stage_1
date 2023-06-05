<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SSDController extends AbstractController
{
    #[Route('/s/s/d', name: 'app_s_s_d')]
    public function index(): Response
    {
        return $this->render('ssd/index.html.twig', [
            'controller_name' => 'SSDController',
        ]);
    }

    #[Route('/AjouterSSD', name: 'app_AjouterSSD')]
    public function AjouterSSD(): Response
    {
        return $this->render('ssd/AjouterSSD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/ModifierSSD', name: 'app_ModifierSSD')]
    public function ModifierSSD(): Response
    {
        return $this->render('ssd/ModifierSSD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
