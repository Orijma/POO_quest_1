<?php 

include_once 'Vehicle.php';

final class ResidentialWay extends HighWay {

    public function __construct()
    {
        $this->nvLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle ){
        $this->currentVehicles[]= $vehicle;
    }elseif($vehicle instanceof Skateboard){
        $this->currentVehicles[]= $vehicle;
    }
}
    
}
