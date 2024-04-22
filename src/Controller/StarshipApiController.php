<?php

namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(LoggerInterface $logger, StarshipRepository $repository): Response {
        
        //dd($logger);
        $logger->info('Starship collection retrieved');
        
        //dd($repository);
        $starships = $repository->findAll();

        // utiliser le Serializer pour :
        //-désérialiser des objets en json 
        //-atteindre les propriétés privées avec les getters
        return $this->json($starships);
        
        // classique :
        // return new Response(json_encode($starships));
    }
}