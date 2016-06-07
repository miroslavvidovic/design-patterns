<?php

include "Car.php";
include "Ford.php";

$ford = Ford::instance();

$car = new Car();
$car->color="blue";
$car->producer=$ford;

echo $ford->produces($car);
echo $ford->founder;

?>
