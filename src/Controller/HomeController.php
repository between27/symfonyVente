<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController


{

    #[Route('/', name: 'home')]
    public function home()
    {

        return $this->render('home.html.twig', [
            'title' => 'Home',
        ]);


    }
}