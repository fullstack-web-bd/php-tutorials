<?php
require_once 'Car.php';
require_once 'House.php';

// Create an object of Car class
$bmwCar = new Car();
$bmwCar->name = "BMW";
$bmwCar->model = "X5";
// var_dump($bmwCar);
echo "Car Name: " . $bmwCar->name . '<br>';
echo "Car Model: " . $bmwCar->model . '<br>';

// Method call
$bmwCar->start();
echo $bmwCar->moveForward(). '<br>';

// Array Access
// $names = [
//     'ak' => 'Akash',
//     'jh' => 'Jhon Doe',
// ];

// echo $names['ak'];


// Call External File class
$house1 = new House();
$house1->color = "Red";
var_dump($house1);

$house2 = new House();
$house2->color = "Yellow";
var_dump($house2);
