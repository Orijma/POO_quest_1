<?php 

include_once 'Vehicle.php';

final class ResidentialWay extends HighWay {

    protected int $nvLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle ){
        $this->currentVehicles[]= $vehicle;
    }elseif($vehicle instanceof Skateboard){
        $this->currentVehicles[]= $vehicle;
    }
}
    
}