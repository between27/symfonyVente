<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    #[Route('/test', name: 'app_test')]
    public function number()
    {
        dd('welcome! sfnqlkfjl');
    }


    #[Route('/test2', name: 'app_test2')]
    public function number2()   
    {
        dd('welcome! sfnqlkfjl');
    }


    

}