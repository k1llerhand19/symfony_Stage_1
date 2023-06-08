<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Alimentation;
use App\Form\AlimentationFormType;
use App\Repository\AlimentationRepository;

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
    public function AjouterAlimRequest(Request $request,  EntityManagerInterface $manager): Response
    {   $alim = new Alimentation();
        $form_alim = $this->createForm(AlimentationFormType::class,$alim);
        $form_alim -> handleRequest($request);
    
        if( $form_alim->isSubmitted() && $form_alim->isValid()){
            
            $manager->persist($alim);
            $manager->flush();

            return $this->redirectToRoute('alim.show',['id'=> $alim->getId()
            ]);
        }


        return $this->render('alim/AjouterAlim.html.twig', [
            'controller_name' => 'AlimController',
            'form_alim' => $form_alim->createView()
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
