<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdinateurController extends AbstractController
{
    #[Route('/ordinateur', name: 'app_ordinateur')]
    public function index(): Response
    {
        return $this->render('ordinateur/index.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }

    #[Route('/AjouterOrdinateur', name: 'app_AjouterOrdinateur')]
    public function AjouterOrdinateur(): Response
    {
        return $this->render('ordinateur/AjouterOrdinateur.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }

    #[Route('/ModifierOrdinateur', name: 'app_ModifierOrdinateur')]
    public function ModifierOrdinateur(): Response
    {
        return $this->render('ordinateur/ModifierOrdinateur.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }
}
