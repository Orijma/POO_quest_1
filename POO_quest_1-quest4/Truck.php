<?php 

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $stockageCapacity;
    private int $cargo = 0;

    private string $energy;

    private int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct( String $color, int $nbSeats, String $energy)
    {
        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
    }

    public function full()
    {
        if($this->cargo < $this->stockageCapacity){
            return "in filling";
        }elseif($this->cargo = $this->stockageCapacity){
            return "full";
        }      
    }

    

    /*
    * Getters and Setters 
    */

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(String $energy)
    {

        if(in_array($energy, self::ALLOWED_ENERGIES)){
        $this->energy = $energy;
        }
        return $this;
    }

    public function getStockageCapacity()
    {
        return $this->stockageCapacity;
    }

    public function setStockageCapacity(int $stockageCapacity)
    {
        $this->stockageCapacity=$stockageCapacity;
    }

    public function getCargo()
    {

        return $this->cargo;
    }

    public function setCargo(int $cargo)
    {
        $this->cargo=$cargo;
    }

}
    








?>