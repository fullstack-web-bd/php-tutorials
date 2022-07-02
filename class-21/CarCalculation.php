<?php

trait CarCalculation {

    public function calculate(): string
    {
        return "Calculating...";
    }

    public function getCalculateMilePerGallon(): float
    {
        return $this->milesDriven / $this->fuelUsed;
    }
}