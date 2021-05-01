<?php

require_once 'Vehicle.php';

//child class Car

class Car extends Vehicle {

    private string $energy;
    private int $levelEnergy;
    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = ['fuel', 'electric'];

    public function __construct($color,$nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        //$this->color = $color;
        //$this->nbSeats = $nbSeats;
        $this->currentSpeed = 0;
        //$this->energy = $energy;
        $this->setEnergy($energy);
        $this->levelEnergy = 100;
        $this->nbWheels = 4; 
        $this->hasParkBrake = true;   
    }

    public function start() {
        if($this->hasParkBrake === true){
            throw new Exception("Handbrake actived");
        }

    }

    public function getEnergy(): string
    {
        return $this->energy;
    }   

    public function setEnergy(string $energy): Car {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
    }
        return $this;
    }

    public function getLevelEnergy(): int
    {
        return $this->levelEnergy;
    }

    public function setLevelEnergy(int $levelEnergy): void
    {
        $this->levelEnergy = $levelEnergy;
    }
        

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setParkBrake()
    {
        if($this->hasParkBrake === false) {
            $this->hasParkBrake === true;
        } else {
            $this->hasParkBrake === false;
        }
    }    
}