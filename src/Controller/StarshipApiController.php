<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger): Response {
        //dd($logger);
        $logger->info('Starship collection retrieved');
        
        $starships = [
            new Starship(
                1,
                'Stupid LeafyCruiser (COCO-0001)', 
                'Garden', 
                'Nadin Jardin', 
                'taken over by Q') ,           
            new Starship(
                2,
                'Stupid Espresso (COCO-1234-C)',
                'Latte',
                'Jane T. Quick!',
                'repaired',
            ),
            new Starship(
                3,
                'Stupid Wanderlust (COCO-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                'under construction',
            )
        ];

        // utiliser le Serializer pour :
        //-désérialiser des objets en json 
        //-atteindre les propriétés privées avec les getters
        return $this->json($starships);
        
        // classique :
        // return new Response(json_encode($starships));
    }
}