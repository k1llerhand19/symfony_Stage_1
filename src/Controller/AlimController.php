<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

class AlimController extends AbstractController
{
    #[Route('/alim', name: 'alim.show')]
    public function index(): Response
    {
        return $this->render('alim/index.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('alim/ajouter', name: 'alim.add')]
    public function AjouterAlimRequest(Request $request ): Response
    {
        dump($request);
        /*if ($request->$request->count() > 0) {
            $alim = new alimentation();
            $alim -> setNom($request->$request->get('nom'))
                -> setModele($request->$request->get('modele'))
                -> setMarque($request->$request->get('marque'))
                -> setPuissance($request->$request->get('puissance'))
                -> setStock($request->$request->get('stock'))
                -> setCreatedAt(new \DateTime());


            return $this->redirectToRoute('alim.show');
        }*/
        return $this->render('alim/AjouterAlim.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }

    #[Route('alim/{id}', name: 'alim.edit')]
    public function ModifierAlim($id): Response
    {
        return $this->render('alim/ModifierAlim.html.twig', [
            'controller_name' => 'AlimController', ['id' => $id]
        ]);
    }

    
}
