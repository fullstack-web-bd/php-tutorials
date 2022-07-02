<?php

abstract class Car
{
    public string $color;

    public string $model;

    private float $milage;

    public bool $is_new;

    public float $milesDriven;

    public float $fuelUsed;

    public function __construct(string $model, string $color, bool $isNew)
    {
        $this->model = $model;
        $this->color = $color;
        $this->is_new = $isNew;
    }

    public function intro(): string
    {
        return "Hi, This is a {$this->color} {$this->model} Car...";
    }

    /**
     * Get milage
     *
     * @return float
     */
    public function getMilage(): float
    {
        return $this->milage;
    }

    public function setMilage(float $milage): void
    {
        $this->milage = $milage;
    }

    public function setMilesDriven(float $milesDriven)
    {
        $this->milesDriven = $milesDriven;
    }

    public function setFuelUsed(float $fuelUsed)
    {
        $this->fuelUsed = $fuelUsed;
    }

    abstract public function showBatteryInformation(float $batterySize): string;
}
