<?php

class Mammals {
    public string $hair;
    protected string $protectedData;
    private string $privateData;

    public function __construct() {
        $this->hair = "Mammals Hair";
        $this->privateData = "privateData";
    }

    public function sayWhoAmI()
    {
        echo "<br>I am a Mammal<br>";
        // echo $this->privateData;
    }

    final public function sayImAMammal()
    {
        echo "<br>I am a Mammal<br>";
    }

    protected function protectedMethod()
    {
        echo "I am a protected method";
    }
}