<?php

include_once "car.php";

$car = new Car('Renaud', 'Clio');
$car -> setColor('rouge');

echo $car->drive();
echo "<br>";
echo $car ->klaxon();

?>