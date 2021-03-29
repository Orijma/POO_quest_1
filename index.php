<?php

require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';

$truck = new Truck('red', 2, 'fuel');
$truck-> setStockageCapacity(20);
$truck->setCargo(20);
echo $truck->full();
echo $truck->forward();
var_dump($truck);

?>