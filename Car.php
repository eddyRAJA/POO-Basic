<?php 

//Car.php

class Car 
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;
    private bool $energy;
    private int $levelEnergy;

    public function __construct($color, $nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->currentSpeed = 0;
        $this->energy = $energy;
        $this->nbWheels = 4;
        $this->levelEnergy = 100;
    }

    public function start() {
        echo 'I start!';
    }
    
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getEnergy(): bool
    {
        return $this->energy;
        
    }   

    public function setEnergy(bool $energy): void
    {
        $this->energy = $energy;
    }

    public function getLevelEnergy(): int
    {
        return $this->levelEnergy;
    }

    public function setLevelEnergy(int $levelEnergy): void
    {
        $this->levelEnergy = $levelEnergy;
    }


    public function forward($currentSpeed): string
    {
        $this->currentSpeed = $currentSpeed;

        return "Go !";
    }
        
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence = "Braaaake!!!";
            
        }
        var_dump($sentence);
        $sentence = "I'm stopped";
        return $sentence;
    }
    
}
