<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HDDController extends AbstractController
{
    #[Route('/h/d/d', name: 'app_h_d_d')]
    public function index(): Response
    {
        return $this->render('HDD/index.html.twig', [
            'controller_name' => 'HDDController',
        ]);
    }

    #[Route('/AjouterHDD', name: 'app_AjouterHDD')]
    public function AjouterHDD(): Response
    {
        return $this->render('HDD/AjouterHdd.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/ModifierHDD', name: 'app_ModifierHDD')]
    public function ModifierHDD(): Response
    {
        return $this->render('HDD/ModifierHDD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
