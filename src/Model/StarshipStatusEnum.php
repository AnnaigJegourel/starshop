<?php

namespace App\Model;

// string-backed enum
enum StarshipStatusEnum: string
{

    case WAIING = 'waiting';

    case IN_PROGRESS = 'in progress';

    case COMPLETED = 'completed';
    
}
