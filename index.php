<?php

require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$truck = new Truck('red', 2, 'fuel');
$cars = new Cars('pink',5,'fuel');
$bike = new Bicycle('green',1,'electric');
$skate = new Skateboard('black',1,'none');

$motorWay= new MotorWay();
$motorWay->addVehicle($cars);


$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($cars);
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($skate);


$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($skate);





var_dump($residentialWay);




?>