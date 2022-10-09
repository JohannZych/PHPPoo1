<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('color');
$bike2 = new Bicycle('color');
$car = new Car('blue', 4, 'electricity', 0);
$car2 = new Car('blue', 4, 'electricity', 0);

//Moving bike
echo $bike->forward();
echo $bike->brake();

//Moving bike2
echo $bike2->forward();
echo $bike2->brake();

echo "<br> ------------------------------------- <br>";

// Moving car
echo $car->forward();
echo $car->start();
echo $car->forward();
echo $car->brake();

// Moving car2
echo $car2->forward();
echo $car2->start();
echo $car2->forward();
echo $car2->brake();