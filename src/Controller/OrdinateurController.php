<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Ordinateur;
use App\Form\OrdinateurFormType;
use App\Repository\OrdinateurRepository;

class OrdinateurController extends AbstractController
{
    #[Route('/ordinateur', name: 'ordinateur.show')]
    public function index(): Response
    {
        return $this->render('ordinateur/index.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }





    #[Route('ordinateur/ajouter', name: 'ordinateur.add')]
    public function AjouterOrdinateur(Request $request,  EntityManagerInterface $manager): Response
    {
        $ordinateur = new Ordinateur();
        $form_ordinateur = $this->createForm(OrdinateurFormType::class,$ordinateur);
        $form_ordinateur -> handleRequest($request);
    
        if( $form_ordinateur->isSubmitted() && $form_ordinateur->isValid()){
            
            $manager->persist($ordinateur);
            $manager->flush();

            return $this->redirectToRoute('ordinateur.show',['id'=> $ordinateur->getId()
            ]);
        }

        return $this->render('ordinateur/AjouterOrdinateur.html.twig', [
            'controller_name' => 'OrdinateurController',
            'form_ordinateur'=> $form_ordinateur->createView()

        ]);
    }




    #[Route('ordinateur/{id}', name: 'ordinateur.edit')]
    public function ModifierOrdinateur(): Response
    {
        return $this->render('ordinateur/ModifierOrdinateur.html.twig', [
            'controller_name' => 'OrdinateurController',
        ]);
    }
}
