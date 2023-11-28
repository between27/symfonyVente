<?php

namespace App\Controller;

use App\Repository\VetementRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VetementController extends AbstractController
{
    #[Route('/vetement', name: 'app_vetement')]
    public function index(VetementRepository $vetement): Response
    {

        $vetements = $vetement->findAll();

        return $this->render('vetement/index.html.twig', [
            'vetements' => $vetements,
            'controller_name' => 'VetementController',
        ]);
    }
}
