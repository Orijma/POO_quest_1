<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn() : Bool 
    {

        if ( $this->getCurrentSpeed() > 10) {
            return True; 
        } else {
            return False;
        }
    }
    public function switchOff() : Bool 
    {
        return False;
    }

}



?>