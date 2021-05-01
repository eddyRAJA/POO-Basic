<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    private bool $dynamo;

    public function __construct(string $color, int $nbSeats, bool $dynamo)
    {
        parent::__construct($color, $nbSeats);
        $this->dynamo = $dynamo;
    }

    public function switchOn() 
    {
        if ($this->dynamo === true) {
            return true;
        } else {
            return "no dynamo";
        }

    }

    public function switchOff() 
    {
        if ($this->dynamo === true) {
            return false;
        }else {
            return "no dynamo";
        }
    }
}