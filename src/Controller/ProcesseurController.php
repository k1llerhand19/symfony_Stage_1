<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProcesseurController extends AbstractController
{
    #[Route('/processeur', name: 'app_processeur')]
    public function index(): Response
    {
        return $this->render('processeur/index.html.twig', [
            'controller_name' => 'ProcesseurController',
        ]);
    }

    #[Route('/Ajouter_Proce', name: 'app_AjouterProce')]
    public function AjouterProce(): Response
    {
       
        return $this->render('Processeur/AjouterProcesseur.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('/Modifierr_Proce', name: 'app_ModifierProce')]
    public function ModifierProce(): Response
    {
       
        return $this->render('Processeur/ModifierProcesseur.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}
