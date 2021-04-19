<?php

include_once 'Vehicle.php';

abstract class HighWay {


    protected array $currentVehicles = []; 
    protected int $nvLane;
    protected int $maxSpeed;



    abstract public function addVehicle(Vehicle $vehicle);


    
    /**
     * Get the value of currentVehicles
     */ 
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @return  self
     */ 
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    /**
     * Get the value of nvLane
     */ 
    public function getNvLane()
    {
        return $this->nvLane;
    }

    /**
     * Set the value of nvLane
     *
     * @return  self
     */ 
    public function setNvLane($nvLane)
    {
        $this->nvLane = $nvLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}