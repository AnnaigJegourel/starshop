<?php

namespace App\Repository;

use App\Model\Starship;

class StarshipRepository
{
    public function findAll() : array {
        return [
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
    }
}