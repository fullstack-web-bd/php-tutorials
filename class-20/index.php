<?php
require 'Tesla.php';
require 'Bmw.php';

// Shapes
require 'Circle.php';
require 'Rectangle.php';

// Throws error because Car is abstract
// $car = new Car('Audi', 'silver', true);
// var_dump($car);

$teslaCar = new Tesla('Model S', 'Red', true);
echo $teslaCar->intro();
echo "<br>";
echo $teslaCar->showBatteryInformation(10);

$bmwCar = new Bmw("BM HJ", 'Blue', true);
echo "<br>";
echo $bmwCar->intro();
echo "<br>";
echo $bmwCar->showBatteryInformation(200);


echo "<br>--";
$circleShape = new Circle(2);
echo $circleShape->getDisplay();

echo "<br>--";
$rectangleShape = new Rectangle(10, 20);
echo $rectangleShape->getDisplay();