<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Processeur;
use App\Form\ProcesseurFormType;
use App\Repository\ProcesseurRepository;

class ProcesseurController extends AbstractController
{
    #[Route('/processeur', name: 'processeur.show')]
    public function index(): Response
    {
        return $this->render('processeur/index.html.twig', [
            'controller_name' => 'ProcesseurController',
        ]);
    }

    #[Route('processeur/ajouter', name: 'processeur.add')]
    public function AjouterProce(Request $request,  EntityManagerInterface $manager): Response
    {   $processeur = new Processeur();
        $form_processeur = $this->createForm(ProcesseurFormType::class, $processeur);
        $form_processeur -> handleRequest($request);
    
        if( $form_processeur->isSubmitted() && $form_processeur->isValid()){
            
            $manager->persist($form_processeur);
            $manager->flush();

            return $this->redirectToRoute('processeur.show',['id'=> $processeur->getId()
            ]);
        }
        return $this->render('Processeur/AjouterProcesseur.html.twig', [
            'controller_name' => 'ProcesseurController',
            'form_processeur' => $form_processeur->createView()
        ]);
    }



    #[Route('processeur/{id}', name: 'processeur.edit')]
    public function ModifierProce(): Response
    {
       
        return $this->render('Processeur/ModifierProcesseur.html.twig', [
            'controller_name' => 'ProcesseurController',
        ]);
    }

}
