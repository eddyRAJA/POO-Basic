<?php

require_once 'Vehicle.php';

class SkateBoard extends Vehicle
{
    public function __construct(string $color, int $nbSeats)
    {
        $this->NbWheels = 4;
        parent::__construct($color, $nbSeats);
        $this->NbSeats = 0;
        
    }
    
}