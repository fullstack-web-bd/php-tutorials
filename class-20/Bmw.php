<?php

require_once 'Car.php';

class Bmw extends Car
{
    public function showBatteryInformation(float $batterySize): string
    {
        return 'This is a battery for BMW car. Battery Size is: ' . $batterySize;
    }
}
