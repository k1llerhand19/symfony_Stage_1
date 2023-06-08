<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Ram;
use App\Form\RamFormType;
use App\Repository\RamRepository;


class RAMController extends AbstractController
{
   
    #[Route('/ram', name: 'ram.show')]
    public function AccueilRam(): Response
    {
        return $this->render('Ram/AccueilRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }
    
    #[Route('ram/ajouter', name: 'ram.add')]
    public function CreerRam(Request $request,  EntityManagerInterface $manager): Response
    {
        $ram = new Ram();
        $form_ram = $this->createForm(RamFormType::class, $ram);
        $form_ram -> handleRequest($request);

        if( $form_ram->isSubmitted() && $form_ram->isValid()){
            $manager->persist($ram);
            $manager->flush();

            return $this->redirectToRoute('ram.show',['id'=>$ram->getId()]);
        }


        return $this->render('Ram/CreerRam.html.twig', [
            'controller_name' => 'RAMController',
            'form_ram'=> $form_ram->createView()
        ]);
    }

    #[Route('ram/{id}', name: 'ram.edit')]
    public function ModifierRam(): Response
    {
        return $this->render('Ram/ModifierRam.html.twig', [
            'controller_name' => 'RAMController',
        ]);
    }

    
}
