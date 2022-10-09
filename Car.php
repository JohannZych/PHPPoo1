<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;
    private bool $start;

    public function __construct(string $color, int $nbSeats, string $energy, bool $start)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->start = $start;
    }
    public function start(): string
    {
        $this->start = 1;
        return "Engine On !<br>";
    }
    public function forward(): string
    {
            if ($this->start) {
                $this->currentSpeed = 50;
                return "Go !<br>";
            } else {
                return "Start the engine<br>";
            }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped ! ";
        return $sentence;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function getStart(): bool
    {
        return $this->start;
    }

    public function getColor(): string{
        return $this->color;
    }
    public function getNbWheels(): int{
        return $this->nbWheels;
    }
    public function getNbSeats(): int{
        return $this->nbSeats;
    }
    public function getCurrentSpeed(): int{
        return $this->currentSpeed;
    }
    public function getEnergy(): string{
        return $this->energy;
    }
    public function getEnergyLevel(): int{
        return $this->energyLevel;
    }
}