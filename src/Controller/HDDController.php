<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Hdd;
use App\Form\HddType;
use App\Repository\HddRepository;

class HDDController extends AbstractController
{
    #[Route('/hdd', name: 'hdd.show')]
    public function index(): Response
    {   
        return $this->render('HDD/index.html.twig', [
            'controller_name' => 'HDDController',
        ]);
    }

    #[Route('hdd/ajouter', name: 'hdd.add')]
    public function AjouterHDD(Request $request,  EntityManagerInterface $manager): Response
    {   $hdd = new Hdd();
        $form_hdd = $this->createForm(HddType::class,$hdd);
        $form_hdd -> handleRequest($request);
    
        if( $form_hdd->isSubmitted() && $form_hdd->isValid()){
            
            $manager->persist($hdd);
            $manager->flush();

            return $this->redirectToRoute('hdd.show',['id'=> $hdd->getId()
            ]);
        }
        return $this->render('HDD/AjouterHdd.html.twig', [
            'controller_name' => 'HDDController',
            'form_hdd' => $form_hdd->createView()
        ]);
    }

    #[Route('hdd/{id}', name: 'hdd.edit')]
    public function ModifierHDD(): Response
    {
        return $this->render('HDD/ModifierHDD.html.twig', [
            'controller_name' => 'HDDController',
        ]);
    }
}
