<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HDDController extends AbstractController
{
    #[Route('/hdd', name: 'hdd.show')]
    public function index(): Response
    {
        return $this->render('HDD/index.html.twig', [
            'controller_name' => 'HDDController',
        ]);
    }

    #[Route('hdd/ajouter', name: 'hdd.add')]
    public function AjouterHDD(): Response
    {
        return $this->render('HDD/AjouterHdd.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('hdd/{id}', name: 'hdd.edit')]
    public function ModifierHDD(): Response
    {
        return $this->render('HDD/ModifierHDD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
