<?php

require_once 'Shape.php';

class Rectangle extends Shape {
    private float $height;
    private float $width;

    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea(): float {
        return $this->height * $this->width; // height * width
    }

    public function getDisplay(): string {
        return "Hi, I'm a Rectangle and My Area is: " . $this->getArea();
    }
}