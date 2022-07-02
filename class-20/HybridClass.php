<?php

require 'InterfaceShowMore.php';

class HybridClass extends Shape implements InterfaceShowMore, InterfaceShape
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return 3.1416 * pow($this->radius, 2); // PI * r^2
    }

    public function getDisplay(): string
    {
        return "Hi, I'm a Circle and My Area is: " . $this->getArea();
    }

    public function showMore(): string
    {
        return "I'm showing more...";
    }
}
