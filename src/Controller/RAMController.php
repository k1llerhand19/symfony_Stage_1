<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RAMController extends AbstractController
{
   
    #[Route('/ram', name: 'ram.show')]
    public function AccueilRam(): Response
    {
        return $this->render('Ram/AccueilRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }
    
    #[Route('ram/ajouter', name: 'ram.add')]
    public function CreerRam(): Response
    {
        return $this->render('Ram/CreerRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }

    #[Route('ram/{id}', name: 'ram.edit')]
    public function ModifierRam(): Response
    {
        return $this->render('Ram/ModifierRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }

    
}
