<?php

namespace App\Controller;

use App\Entity\Chaussure;
use App\Form\ChaussureType;
use App\Repository\ChaussureRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaussureController extends AbstractController
{
    #[Route('/chaussures', name: 'app_chaussure')]
    public function index(ChaussureRepository $chaussure): Response
    {
        $chaussures = $chaussure->findAll();

        return $this->render('chaussure/index.html.twig', [
            'chaussures' => $chaussures,
            'controller_name' => 'ChaussureController',
        ]);
    }

    #[Route('/chaussure/new', name: 'app_chaussure_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, ): Response
    {
        $chaussure = new Chaussure();
        $form = $this->createForm(ChaussureType::class, $chaussure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chaussure);
            $entityManager->flush();
            return $this->redirectToRoute('app_chaussure');
        }

        return $this->render('chaussure/new.html.twig', [
            'controller_name' => 'ChaussureController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/chaussure/delete/{id}', name: 'app_chaussure_delete')]
    public function delete(Chaussure $chaussure, EntityManagerInterface $entityManager): Response
    {
        if($chaussure) {
            $entityManager->remove($chaussure);
            $entityManager->flush();
            $this->addFlash('success', 'Chaussure supprimée avec succès.');
        }
        return $this->redirectToRoute('app_chaussure');
    }

    #[Route('/chaussure/edit/{id}', name: 'app_chaussure_edit')]
    public function edit(Chaussure $chaussure, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChaussureType::class, $chaussure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chaussure);
            $entityManager->flush();
            return $this->redirectToRoute('app_chaussure');
        }

        return $this->render('chaussure/edit.html.twig', [
            'controller_name' => 'ChaussureController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/chaussure/show/{id}', name: 'app_chaussure_show')]
    public function show(Chaussure $chaussure): Response
    {
        return $this->render('chaussure/show.html.twig', [
            'controller_name' => 'ChaussureController',
            'chaussure' => $chaussure,
        ]);
    }


}
