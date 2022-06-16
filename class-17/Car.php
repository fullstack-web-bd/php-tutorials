<?php

class Car
{
    public string $color;

    public string $model;

    public float $milage;

    public bool $is_new;

    public function start(): void
    {
        echo 'Car started.';
    }

    public function stop(): void
    {
    }

    public function moveForward(): string
    {
        return "Moved.";
    }

    public function moveBackward(): void
    {
    }
}