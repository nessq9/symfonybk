<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheffrontController extends AbstractController
{
    /**
     * @Route("/chef", name="chef")
     */
    public function index(): Response
    {
        return $this->render('cheffront/index.html.twig', [
            'controller_name' => 'ChefController',
        ]);
    }
}
