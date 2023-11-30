<?php

namespace App\Controller;

use App\Entity\Vetement;
use App\Form\VetementType;
use App\Repository\VetementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VetementController extends AbstractController
{
    #[Route('/vetements', name: 'app_vetement')]
    public function index(VetementRepository $vetement): Response
    {

        $vetements = $vetement->findAll();

        return $this->render('vetement/index.html.twig', [
            'vetements' => $vetements,
            'controller_name' => 'VetementController',
        ]);
    }

    #[Route('/vetement/new', name: 'app_vetement_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vetement = new Vetement();
        $form = $this->createForm(VetementType::class, $vetement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vetement);
            $entityManager->flush();
            return $this->redirectToRoute('app_vetement');
        }


        return $this->render('vetement/new.html.twig', [
            'controller_name' => 'VetementController',
            'form' => $form->createView(),
        ]);
    }


    #[Route('/vetement/delete/{id}', name: 'app_vetement_delete')]
    public function delete(Vetement $vetement, EntityManagerInterface $entityManager): Response
    {
        if($vetement) {
            $entityManager->remove($vetement);
            $entityManager->flush();
            $this->addFlash('success', 'Vêtement supprimé avec succès.');
        }
        return $this->redirectToRoute('app_vetement');
    }

    #[Route('/vetement/edit/{id}', name: 'app_vetement_edit')]
    public function edit(Vetement $vetement, Request $request, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(VetementType::class, $vetement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vetement);
            $entityManager->flush();
            return $this->redirectToRoute('app_vetement');
        }

        return $this->render('vetement/edit.html.twig', [
            'controller_name' => 'VetementController',
            'form' => $form->createView(),
            'vetement' => $vetement,
        ]);


    }

    #[Route('/vetement/{id}', name: 'app_vetement_show')]
    public function show(Vetement $vetement): Response
    {
        return $this->render('vetement/show.html.twig', [
            'controller_name' => 'VetementController',
            'vetement' => $vetement,
        ]);
    }

}
