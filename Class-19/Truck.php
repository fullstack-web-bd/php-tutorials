<?php
require_once 'Car.php';

class Truck extends Car
{
    public function getModel() {
        $this->add2(10, 20);
        return $this->protectedSomething;
    }
}
