<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VentiradAIOController extends AbstractController
{
    #[Route('/ventiradaio', name: 'ventiradaio.show')]
    public function index(): Response
    {
        return $this->render('ventirad_aio/index.html.twig', [
            'controller_name' => 'VentiradAIOController',
        ]);
    }

    #[Route('ventiradaio/ajouter', name: 'ventiradaio.add')]
    public function AjouterVentiradAIO(): Response
    {
        return $this->render('ventirad_aio/AjouterVentiRADAIO.html.twig', [
            'controller_name' => 'VentiradAIOController',
        ]);
    }

    #[Route('ventiradaio/{id}', name: 'ventiradaio.edit')]
    public function ModifierVentiradAIO(): Response
    {
        return $this->render('ventirad_aio/ModifierVentiRADAIO.html.twig', [
            'controller_name' => 'VentiradAIOController',
        ]);
    }
}
