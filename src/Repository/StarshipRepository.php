<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
        
    }

    public function findAll() : array {

        $this->logger->info('Starship collection retrieved');

        return [
            new Starship(
                1,
                'Stupid LeafyCruiser (COCO-0001)', 
                'Garden', 
                'Nadin Jardin', 
                StarshipStatusEnum::IN_PROGRESS
            ),           
            new Starship(
                2,
                'Stupid Espresso (COCO-1234-C)',
                'Latte',
                'Jane T. Quick!',
                StarshipStatusEnum::COMPLETED
            ),
            new Starship(
                3,
                'Stupid Wanderlust (COCO-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                StarshipStatusEnum::WAIING
            )
        ];
    }

    public function find(int $id) : ?Starship {
        foreach ($this->findAll() as $starship) {
            //getId() est une fonction de Entity/Starship !
            if ($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}