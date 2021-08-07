<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/fruits', name: 'fruits')]
    public function fruits(): Response
    {
        return $this->render('fruits/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

    #[Route('/fruits/{product_name}', name: 'fruit-info')]
    public function fruit(): Response
    {
        return $this->render('fruit/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

    #[Route('/legumes', name: 'legumes')]
    public function legumes(): Response
    {
        return $this->render('legumes/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }

    #[Route('/legumes/{product_name}', name: 'legume-info')]
    public function legume(): Response
    {
        return $this->render('legume/index.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }
}
