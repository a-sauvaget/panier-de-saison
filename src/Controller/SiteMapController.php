<?php

namespace App\Controller;

use App\Repository\FruitRepository;
use App\Repository\LegumeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SiteMapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(
        Request $request,
        LegumeRepository $legumeRepository,
        FruitRepository $fruitRepository
    ): Response {
        $hostname = $request->getSchemeAndHttpHost();

        $urls = [];

        $urls[] = ['loc' => $this->generateUrl('home')];
        $urls[] = ['loc' => $this->generateUrl('a_propos')];
        $urls[] = ['loc' => $this->generateUrl('contact')];
        $urls[] = ['loc' => $this->generateUrl('rgpd')];
        $urls[] = ['loc' => $this->generateUrl('legumes')];
        $urls[] = ['loc' => $this->generateUrl('fruits')];

        // Récupération de toute les urls des légumes
        foreach ($legumeRepository->findAll() as $legume) {
            $urls[] = [
                'loc'     => $this->generateUrl('legume-info', ['legumeName' => $legume->getLegumeName()]),
                'lastmod' => $legume->getUpdatedAt()->format('Y-m-d')
            ];
        }

        // Récupération de toute les urls des fruits
        foreach ($fruitRepository->findAll() as $fruit) {
            $urls[] = [
                'loc' => $this->generateUrl('fruit-info', ['fruitName' => $fruit->getFruitName()]),
                'lastmod' => $fruit->getUpdatedAt()->format('Y-m-d')
            ];
        }

        $response = new Response(
            $this->renderView('sitemap/index.html.twig', [
                'urls'     => $urls,
                'hostname' => $hostname,
            ]),
            200
        );

        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }
}
