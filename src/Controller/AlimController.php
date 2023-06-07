<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use App\Entity\Alimentation;
use App\Repository\AlimentationRepository;


use App\Form\AlimFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

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
    {   $alim = new alimentation();
        $form_alim = $this->createFormBuilder($alim)
                            ->add('nom', TextType::class)
                            ->add('modele', TextType::class)
                            ->add('marque', TextType::class)
                            ->add('puissance', IntegerType::class)
                            ->add('stock', IntegerType::class)
                            ->getForm();
        
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
