<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;

        $myShip = [
            'name' => 'Stupid LeafyCruiser (COCO-0001)',
            'class' => 'Garden',
            'captain' => 'Nadin Jardin',
            'status' => 'under construction',
        ];

        // Response 2: using Twig
        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
        ]);

        // Response 1: with raw html
        //return new Response('<strong>Starshop</strong>: your monopoly-busting options for Starship parts!');
    }
}
