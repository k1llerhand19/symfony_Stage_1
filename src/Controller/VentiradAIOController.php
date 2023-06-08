<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Refroidisseur;
use App\Form\RefroidisseurFormType;
use App\Repository\RefroidisseurRepository;

class VentiradAIOController extends AbstractController
{
    #[Route('/ventiradaio', name: 'ventiradaio.show')]
    public function index(): Response
    {
        return $this->render('ventirad_aio/index.html.twig', [
        ]);
    }




    #[Route('ventiradaio/ajouter', name: 'ventiradaio.add')]
    public function AjouterVentiradAIO(Request $request,  EntityManagerInterface $manager): Response
    {
        $Refroidisseur = new Refroidisseur();
        $form_Refroidisseur = $this->createForm(RefroidisseurFormType::class, $Refroidisseur);
        $form_Refroidisseur -> handleRequest($request);

        if( $form_Refroidisseur->isSubmitted() && $form_Refroidisseur->isValid()){
            $manager->persist($Refroidisseur);
            $manager->flush();

            return $this->redirectToRoute('ssd.show',['id'=>$Refroidisseur->getId()]);
        }
        return $this->render('ventirad_aio/AjouterVentiRADAIO.html.twig', [
            'controller_name' => 'VentiradAIOController',
            'form_Refroidisseur'=> $form_Refroidisseur->createView()

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
