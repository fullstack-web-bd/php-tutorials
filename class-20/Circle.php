<?php

// require_once 'Shape.php';

// class Circle extends Shape {
//     private float $radius;

//     public function __construct(float $radius) {
//         $this->radius = $radius;
//     }

//     public function getArea(): float {
//         return 3.1416 * pow($this->radius, 2); // PI * r^2
//     }

//     public function getDisplay(): string {
//         return "Hi, I'm a Circle and My Area is: " . $this->getArea();
//     }
// }

require_once 'InterfaceShape.php';

class Circle implements InterfaceShape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return 3.1416 * pow($this->radius, 2); // PI * r^2
    }

    public function getDisplay(): string {
        return "Hi, I'm a Circle and My Area is: " . $this->getArea();
    }
}