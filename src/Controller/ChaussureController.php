<?php

namespace App\Controller;

use App\Repository\ChaussureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaussureController extends AbstractController
{
    #[Route('/chaussure', name: 'app_chaussure')]
    public function index(ChaussureRepository $chaussure): Response
    {
        $chaussures = $chaussure->findAll();

        return $this->render('chaussure/index.html.twig', [
            'chaussures' => $chaussures,
            'controller_name' => 'ChaussureController',
        ]);
    }
}
