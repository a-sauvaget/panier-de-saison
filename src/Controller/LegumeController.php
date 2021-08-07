<?php

namespace App\Controller;

use App\Entity\Legume;
use App\Repository\LegumeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegumeController extends AbstractController
{

    #[Route('/legumes', name: 'legumes')]
    public function legumes(
        LegumeRepository $legumeRepository,
    ): Response {

        $legumes = $legumeRepository->findAllLegumeOfCurrentMonth();
        return $this->render('legumes/index.html.twig', [
            'legumes' => $legumes,
        ]);
    }

    #[Route('/legumes/{legumeName}', name: 'legume-info')]
    public function legume(
        Legume $legume
    ): Response {
        return $this->render('legume/index.html.twig', [
            'legume' => $legume,
        ]);
    }
}
