<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesfrontController extends AbstractController
{
    /**
     * @Route("/pages", name="pages")
     */
    public function index(): Response
    {
        return $this->render('pagesfront/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
