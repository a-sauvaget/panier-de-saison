<?php

namespace App\Controller;

use App\Entity\Fruit;
use App\Repository\FruitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FruitController extends AbstractController
{
    #[Route('/fruits', name: 'fruits')]
    public function fruits(
        FruitRepository $fruitRepository,
    ): Response {

        $fruits = $fruitRepository->findAllFruitOfCurrentMonth();

        return $this->render('fruits/index.html.twig', [
            'fruits' => $fruits,
        ]);
    }

    #[Route('/fruits/{fruitName}', name: 'fruit-info')]
    public function fruit(Fruit $fruit): Response
    {
        return $this->render('fruit/index.html.twig', [
            'fruit' => $fruit,
        ]);
    }
}
