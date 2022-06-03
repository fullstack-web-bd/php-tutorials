<h2>PHP Class 13 - Functions</h2>
<?php

function helloWorld() {
    echo "Hello World !<br>";
}

helloWorld();
// helloWorld();
// helloWorld();
// helloWorld();
// helloWorld();

// $age = 40;
// $age = abs($age);
// if ($age < 18) {
//     echo "You are a child !";
// } elseif($age > 18 && $age <= 40 ) {
//     echo "You are mid age !";
// } else {
//     echo "You are old";
// }


function getAge($age) {
    $age = abs($age);
    if ($age < 18) {
        echo "You are a child !<br>";
    } elseif($age >= 18 && $age <= 40 ) {
        echo "You are mid age !<br>";
    } else {
        echo "You are old !<br>";
    }
}

$age = 10;
getAge($age);
getAge(20);
getAge(30);
getAge(40);
getAge(50);

function printUserInfo($name, $age, $gender) {
    echo "<div style='border: 1px solid red; padding: 10px;'>";
    echo "<h2>Name: " . $name . "</h2>";
    echo "<h4>Age: " . $age . "</h4>";
    echo "<h4>Gender: " . $gender . "</h4>";
    echo "</div>";
}

printUserInfo("Akash", 28, "Male");
printUserInfo("Jhon", 50, "Male");
printUserInfo("Doe", 20, "FeMale");

// Pass by value
function getPassByValue($value)
{
    $value = $value * 2;
}

$count = 5;
getPassByValue($count);

echo "Pass by value::" . $count . "<br>"; // 5

// Reference
function getPassByReference(&$value)
{
    $value = $value * 2;
}

$countRef = 20;
getPassByReference($countRef);

echo "Pass by reference::" . $countRef . "<br>"; // 5

// Recursive Function
function printUpto20($number) {
    if ($number <= 20) {
        echo $number . " ";
        printUpto20($number + 1);
    }
}

printUpto20("Akash");









echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
