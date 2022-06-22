<?php
require_once 'Car.php';
require_once 'CarChild.php';
require_once 'House.php';

$car = new Car("Tesla X5", "Blue", true);
// echo $car->protectedSomething;
$car->setMilage(1000);
$car->getMilage() . "<br>";
// $car->model = "Tesla X5";
// $car->color = "Blue";
// $car->milage = 50;
// echo $car->is_new ? "New Car" : "Old Car";
// var_dump($car);
echo $car->model . "<br>";
echo $car->color . "<br>";
echo $car->is_new ? 'New' : 'Old' . "<br>";
// $car->changeSomethingPrivately();

$car2 = new Car("Tyota X5", "Red", 100, false);

// $car2->model = "Tyota X5";
// $car2->color = "Blue";
// $car2->milage = 100;
var_dump($car2);

$carChild = new CarChild("Teslar Baccha", "Blue", true);
echo $carChild->getModel();