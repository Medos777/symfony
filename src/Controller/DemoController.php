<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo", name="demo")
     */
    public function index()
    {
     $nom="amine";
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'nom'=>$nom
        ]);

    }



}

