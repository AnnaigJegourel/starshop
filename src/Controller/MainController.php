<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarshipRepository $starshipRepository): Response
    {

        $ships = $starshipRepository->findAll();

        //supprimer cette varible pour faire le compte directement dans Twig
        //$starshipCount = count($ships);

        $myShip = $ships[array_rand($ships)];

        // Response 2: using Twig
        return $this->render('main/homepage.html.twig', [
            //'numberOfStarships' => $starshipCount,
            'ships' => $ships,
            'myShip' => $myShip,
        ]);

        // Response 1: with raw html
        //return new Response('<strong>Starshop</strong>: your monopoly-busting options for Starship parts!');
    }
}
