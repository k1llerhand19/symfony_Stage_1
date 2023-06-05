<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RAMController extends AbstractController
{
    #[Route('/creerram', name: 'app_creerram')]
    public function CreerRam(): Response
    {
        return $this->render('Ram/CreerRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }

    #[Route('/modifierRam', name: 'app_ModifierRam')]
    public function ModifierRam(): Response
    {
        return $this->render('Ram/ModifierRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }

    #[Route('/AccueilRam', name: 'app_AccueilRam')]
    public function AccueilRam(): Response
    {
        return $this->render('Ram/AccueilRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }
}
