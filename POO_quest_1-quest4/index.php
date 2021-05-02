<?php


require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$cars = new Cars('pink',5,'fuel');
$bike = new Bicycle('green',1,'electric');


var_dump($cars->switchOn());

$bike->setCurrentSpeed(11);
echo $bike->getCurrentSpeed();

var_dump($bike->switchOn());




?>