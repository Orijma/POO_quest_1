<?php 

include_once 'HighWay.php';
include_once 'Vehicle.php';
include_once  'Cars.php';


final class MotorWay extends HighWay {

    protected int $nvLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Cars){
        $this->currentVehicles[]= $vehicle;
    }
}
}