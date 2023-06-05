<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GPUController extends AbstractController
{
    #[Route('/gpu', name: 'gpu.show')]
    public function index(): Response
    {
        return $this->render('gpu/index.html.twig', [
            'controller_name' => 'GPUController',
        ]);
    }

    #[Route('gpu/ajouter', name: 'gpu.add')]
    public function AjouterBoitier(): Response
    {
        return $this->render('gpu/Creer_GPU.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('gpu/{id}', name: 'gpu.edit')]
    public function ModifierGPU(): Response
    {
        return $this->render('gpu/ModifierGPU.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
