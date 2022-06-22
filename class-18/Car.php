<?php

class Car
{
    public string $color;

    public string $model;

    private float $milage;

    public bool $is_new;

    protected string $protectedSomething;

    public function __construct(string $model, string $color, bool $isNew)
    {
        // $this->is_new = false;
        // echo "I'm called from construct<br>";

        $this->model = $model;
        $this->color = $color;
        $this->is_new = $isNew;
        $this->protectedSomething = "Something";

        // echo $this->milage;
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

    private function changeSomethingPrivately(): void
    {
        echo "Something changed.";
    }

    private function add($number1, $number2) {
        return $number1 + $number2;
    }

    protected function add2($number1, $number2) {
        return $number1 + $number2;
    }
}
