<?php

// declare(strict_types=1);

function getAge(int $age): void
{
    $age = abs($age);
    if ($age < 18) {
        echo "You are a child !<br>";
    } elseif ($age >= 18 && $age <= 40) {
        echo "You are mid age !<br>";
    } else {
        echo "You are old !<br>";
    }
}

$age = "20";
getAge($age);
