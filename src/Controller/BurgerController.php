<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class BurgerController extends AbstractController {
        #[Route('/burgers', name: 'burgers')]
        public function home(){
            $burgers = ["macdo","burgerking","quick"];

            return $this->render('liste_burger.html.twig',['burgers' => $burgers]);
    
    
    
}
}