<?php
require 'Tesla.php';
require 'Bmw.php';

// User
require_once 'User.php';
require_once 'UserForm.php';


$teslaCar = new Tesla('Model S', 'Red', true);
$teslaCar->setMilesDriven(312);
$teslaCar->setFuelUsed(16);
echo $teslaCar->intro();
echo "<br>";
echo $teslaCar->calculate();
echo "<br>";
echo "Mile Per Gallon: " . $teslaCar->getCalculateMilePerGallon() . 'mpg';
echo "<br>";
echo $teslaCar->showBatteryInformation(10);
echo "<br>---------------<br>";

$bmwCar = new Bmw("BM HJ", 'Blue', true);
echo "<br>";
echo $bmwCar->intro();
echo "<br>";
echo $bmwCar->calculate();
echo "<br>";
echo $bmwCar->showBatteryInformation(200);
echo "<br>---------------<br>";

$user = new User(1, "Akash");
echo $user->send_friend_request(10);
// $user->getAllJobs();

echo "<br>---------------<br>";
$userForm = new UserForm();
var_dump($userForm->showData());
