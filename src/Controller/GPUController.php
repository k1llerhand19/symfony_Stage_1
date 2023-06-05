<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GPUController extends AbstractController
{
    #[Route('/g/p/u', name: 'app_g_p_u')]
    public function index(): Response
    {
        return $this->render('gpu/index.html.twig', [
            'controller_name' => 'GPUController',
        ]);
    }

    #[Route('/AjouterGPU', name: 'app_AjouterGPU')]
    public function AjouterBoitier(): Response
    {
        return $this->render('gpu/Creer_GPU.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('/ModifierGPU', name: 'app_ModifierGPU')]
    public function ModifierGPU(): Response
    {
        return $this->render('gpu/ModifierGPU.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
