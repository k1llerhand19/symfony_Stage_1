<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Cartemere;
use App\Form\CartemereType;
use App\Repository\CartemereRepository;

class CarteMereController extends AbstractController
{
    #[Route('/cartemere', name: 'cartemere.show')]
    public function index(): Response
    {
        return $this->render('carte_mere/index.html.twig', [
            'controller_name' => 'CarteMereController',
        ]);
    }

    #[Route('cartemere/ajouter', name: 'cartemere.add')]
    public function AjouterCm(Request $request,  EntityManagerInterface $manager): Response
    {
        $Cm = new Cartemere();
        $form_Cm = $this->createForm(CartemereType::class,$Cm);
        $form_Cm -> handleRequest($request);
    
        if( $form_Cm->isSubmitted() && $form_Cm->isValid()){
            
            $manager->persist($Cm);
            $manager->flush();

            return $this->redirectToRoute('cartemere.show',['id'=> $Cm->getId()
            ]);
        }

        return $this->render('carte_mere/AjouterCM.html.twig', [
            'controller_name' => 'CarteMereController',
            'form_Cm' => $form_Cm->createView()
        ]);
    }

    #[Route('cartemere/{id}', name: 'cartemere.edit')]
    public function ModifierGPU(): Response
    {
        return $this->render('carte_mere/ModifierCM.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
