<?php
// Bicycle.php

class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;

    public function __construct(string $color)
    {
        $this->color = $color;
        $this->currentSpeed = 0;
        $this->nbSeats = 1;
        $this->nbWheels = 2;
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
            var_dump($sentence);
        }
        $sentence = "I'm stopped";
        return $sentence;
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
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    
}
