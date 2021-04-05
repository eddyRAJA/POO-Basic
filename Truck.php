<?php

require_once 'Vehicle.php';

//child class Truck

class Truck extends Vehicle {
    private string $energy;
    private int $levelEnergy;
    private int $storageCapacity;
    private string $loadingState;

    public const ALLOWED_ENERGIES = ['fuel', 'electric'];
    public const ALLOWED_LOADINGSTATE = ['in_filling', 'full'];

    public function __construct($color,$nbSeats, $energy, $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->currentSpeed = 0;
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
        $this->setLoadingState('in_filling');
        $this->levelEnergy = 100;
        $this->nbWheels = 10;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }   

    public function setEnergy(string $energy): Truck {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
    }
        return $this;
    }

    public function getLoadingState(): string
    {
        return $this->loadingState;
    }   

    public function setLoadingState(string $loadingState): Truck {
        if (in_array($loadingState, self::ALLOWED_LOADINGSTATE)) {
            $this->loadingState = $loadingState;
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
    
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }   
}

