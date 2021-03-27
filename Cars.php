<?php

class Cars
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;
    

    public function  _construct($color, $nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy=$energy;

    }

    public function forward()
    {
        $this->currentSpeed=10;
        return "Start !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(){

    }


    /*
    * Getters part.
    */

    public function getNbWheels()
    {
        return $this->nbWheels;

    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }




    




}





?>