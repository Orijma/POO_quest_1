<?php

require_once 'Vehicle.php';

class Cars extends Vehicle
{

    private string $energy;

    private int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
    }

    /*
    * Getters part.
    */

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(String $energy){

        if(in_array($energy, self::ALLOWED_ENERGIES)){
        $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }




    




}





?>