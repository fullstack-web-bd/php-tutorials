<?php

require_once 'Car.php';

class Tesla extends Car {
    public function showBatteryInformation( float $batterySize ): string {
        return 'Tesla Battery Size: ' . $batterySize;
    }
}