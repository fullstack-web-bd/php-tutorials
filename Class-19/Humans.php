<?php

class Humans extends Mammals {

    public function __construct() {
        $this->hair = "Humans Hair";
    }

    public function think()
    {
        echo $this->hair;
        // echo $this->privateData;
    }

    public function getParentProtectedData()
    {
        return $this->protectedMethod();
    }

    public function sayWhoAmI()
    {
        echo "<br>I am a Human<br>";
    }

    // public function sayImAMammal()
    // {
    //     echo "<br>I am a Human<br>";
    // }
}