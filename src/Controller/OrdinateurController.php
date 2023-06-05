<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdinateurController extends AbstractController
{
    #[Route('/ordinateur', name: 'ordinateur.show')]
    public function index(): Response
    {
        return $this->render('ordinateur/index.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }

    #[Route('ordinateur/ajouter', name: 'ordinateur.add')]
    public function AjouterOrdinateur(): Response
    {
        return $this->render('ordinateur/AjouterOrdinateur.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }

    #[Route('ordinateur/{id}', name: 'ordinateur.edit')]
    public function ModifierOrdinateur(): Response
    {
        return $this->render('ordinateur/ModifierOrdinateur.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }
}
