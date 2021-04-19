<?php 

include_once 'Vehicle.php';


final class PedestrianWay extends HighWay {

    protected int $nvLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle($vehicle)
    {
        $this->currentVehicles[]= $vehicle;
    }
}
    
