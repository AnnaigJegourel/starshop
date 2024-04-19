<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response {
        $starships = [
            [
                'name' => 'Stupid LeafyCruiser (COCO-0001)',
                'class' => 'Garden',
                'captain' => 'Nadin Jardin',
                'status' => 'taken over by Q',
            ],
            [
                'name' => 'Stupid Espresso (COCO-1234-C)',
                'class' => 'Latte',
                'captain' => 'Jane T. Quick!',
                'status' => 'repaired',
            ],
            [
                'name' => 'Stupid Wanderlust (COCO-2024-W)',
                'class' => 'Delta Tourist',
                'captain' => 'Kathryn Journeyway',
                'status' => 'under construction',
            ],
        ];

        return $this->json($starships);
        
        // classique :
        // return new Response(json_encode($starships));
    }
}