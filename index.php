<?php

require_once 'Bicycle.php';
require_once 'Cars.php';

$carsHomer = new Cars();

$carsHomer -> _construct('pink', 4, 'gazole');
echo $carsHomer -> forward();
echo $carsHomer ->brake();

$bikeBart = new Bicycle();
$bikeBart -> _construct('red');
echo $bikeBart -> forward();
echo $bikeBart ->brake();




?>