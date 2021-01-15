<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        if($this->getUser()){
            return $this->redirectToRoute("voiture_index");
        }else{
            return $this->redirectToRoute("app_login");
        }
    }
}
