<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VentiradAIOController extends AbstractController
{
    #[Route('/ventirad/a/i/o', name: 'app_ventirad_a_i_o')]
    public function index(): Response
    {
        return $this->render('ventirad_aio/index.html.twig', [
            'controller_name' => 'VentiradAIOController',
        ]);
    }

    #[Route('/ModifierVentiradAIO', name: 'app_AjouterVentirad_a_i_o')]
    public function AjouterVentiradAIO(): Response
    {
        return $this->render('ventirad_aio/AjouterVentiRADAIO.html.twig', [
            'controller_name' => 'VentiradAIOController',
        ]);
    }

    #[Route('/ModifierVentiradAIO', name: 'app_ModifierVentirad_a_i_o')]
    public function ModifierVentiradAIO(): Response
    {
        return $this->render('ventirad_aio/ModifierVentiRADAIO.html.twig', [
            'controller_name' => 'VentiradAIOController',
        ]);
    }
}
