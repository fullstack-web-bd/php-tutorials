<?php
require_once 'Car.php';

class Bus extends Car
{
    public function getModel() {
        $this->add2(10, 20);
        return $this->protectedSomething;
    }


}
