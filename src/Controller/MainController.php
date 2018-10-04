<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class MainController
{
	/**
    * @Route("/")
    */
    public function home()
    {
       
        return new Response(" Homepage"
        );
    }

 	/**
    * @Route("/test")
    */
    public function test()
    {
       
        return new Response(" test"
        );
     }
}