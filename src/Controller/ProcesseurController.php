<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProcesseurController extends AbstractController
{
    #[Route('/processeur', name: 'processeur.show')]
    public function index(): Response
    {
        return $this->render('processeur/index.html.twig', [
            'controller_name' => 'ProcesseurController',
        ]);
    }

    #[Route('processeur/ajouter', name: 'processeur.add')]
    public function AjouterProce(): Response
    {
       
        return $this->render('Processeur/AjouterProcesseur.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('processeur/{id}', name: 'processeur.edit')]
    public function ModifierProce(): Response
    {
       
        return $this->render('Processeur/ModifierProcesseur.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}
