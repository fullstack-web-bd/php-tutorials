<?php

abstract class Shape {
    /**
     * Get area of a shape
     *
     * @return float
     */
    abstract public function getArea(): float;

    /**
     * Show display of a shape
     *
     * @return string
     */
    abstract public function getDisplay(): string;
}