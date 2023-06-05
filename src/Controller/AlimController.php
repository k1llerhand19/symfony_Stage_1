<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlimController extends AbstractController
{
    #[Route('/alim', name: 'app_alim')]
    public function index(): Response
    {
        return $this->render('alim/index.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/AjouterAlim', name: 'app_AjouterAlim')]
    public function AjouterAlim(): Response
    {
        return $this->render('alim/AjouterAlim.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/ModifierAlim', name: 'app_ModifierAlim')]
    public function ModifierAlim(): Response
    {
        return $this->render('alim/ModifierAlim.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
