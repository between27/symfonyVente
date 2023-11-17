<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class BurgerController extends AbstractController {

    public $burgers = [
        ['id' => 'burger_1','name'=>"big mac" , 'description' => 'Burger 1 description', 'price' => 5.99],
        ['id' => 'burger_2','name'=>"royal cheese" , 'description' => 'Burger 2 description', 'price' => 6.99],
        ['id' => 'burger_3','name'=>"mc bacon" , 'description' => 'Burger 3 description', 'price' => 7.99],
        ['id' => 'burger_4','name'=>"mc deluxe" , 'description' => 'Burger 4 description', 'price' => 8.99],
        ['id' => 'burger_5','name'=>"mc chicken" , 'description' => 'Burger 5 description', 'price' => 9.99]
    ];
        #[Route('/burgers', name: 'burgers')]
        public function home(){
            return $this->render('liste_burger.html.twig',['burgers' => $this->burgers,
                'title' => 'Burgers',]);
}

        #[Route('/burgers/{id}', name: 'burger')]
        public function burger($id){
           foreach ($this->burgers as $burger) {
               if ($burger['id'] === $id) {
                   return $this->render("burger.html.twig", ['burger'=>$burger]);
               }
           }
        }
}

