<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Ssd;
use App\Form\SsdFormType;
use App\Repository\SsdRepository;

class SSDController extends AbstractController
{
    #[Route('/ssd', name: 'ssd.show')]
    public function index(): Response
    {
        return $this->render('ssd/index.html.twig', [
            'controller_name' => 'SSDController',
        ]);
    }

    #[Route('ssd/ajouter', name: 'ssd.add')]
    public function AjouterSSD(Request $request,  EntityManagerInterface $manager): Response
    {
        $ssd = new Ssd;
        $form_ssd = $this->createForm(SsdFormType::class, $ssd);
        $form_ssd -> handleRequest($request);

        if( $form_ssd->isSubmitted() && $form_ssd->isValid()){
            $manager->persist($ssd);
            $manager->flush();

            return $this->redirectToRoute('ssd.show',['id'=>$ssd->getId()]);
        }
        return $this->render('ssd/AjouterSSD.html.twig', [
            'controller_name' => 'SSDController',
            'form_ssd'=> $form_ssd->createView()
        ]);
    }

    #[Route('ssd/{id}', name: 'ssd.edit')]
    public function ModifierSSD(): Response
    {
        return $this->render('ssd/ModifierSSD.html.twig', [
            'controller_name' => 'AlimController',
        ]);
    }
}
