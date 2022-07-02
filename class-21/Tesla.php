<?php

require_once 'Car.php';
require_once 'CarCalculation.php';

class Tesla extends Car {
    use CarCalculation;

    public function showBatteryInformation( float $batterySize ): string {
        return 'Tesla Battery Size: ' . $batterySize;
    }
}