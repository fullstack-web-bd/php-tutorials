<?php

// $number1 = 20;
// $summation = $number1 + 30 + 50 - 20;
// echo $summation; // 40

$number1 = 50;
$number2 = 10;

$summation = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;
$exp = 5 ** 3; // 125
$modulo = 11 % 6; // 1

echo "Summation: " . $summation . '<br>';
echo "Subtraction: " . $subtraction . '<br>';
echo "Multiplication: " . $multiplication . '<br>';
echo "Division: " . $division . '<br>';
echo "Exponential: " . $exp . '<br>';
echo "modulo: " . $modulo . '<br>';
echo '<br>----------</br>';

$a = 50;
// $a = $a + 10;
$a += 10;
echo "a ==> " . $a . "<br>";

$a -= 10;
echo "a ==> " . $a . "<br>";

$a *= 10;
echo "a ==> " . $a . "<br>";


$a /= 10;
echo "a ==> " . $a . "<br>";

$a %= 7;
echo "a ==> " . $a . "<br>";


echo '<br>----------</br>';

$x = 10;
// $x = $x + 1;
// $x += 1;
$x++;
// ++$x;
echo $x;

// echo ++$x;
// echo $x++;
// echo $x;
echo '<br>----------</br>';

$b = 20;
echo $b-- . '<br>'; // 20
echo $b. '<br>'; // 19

echo --$b . '<br>'; // 18
echo $b. '<br>'; // 18
echo '<br>----------</br>';

$name = "Jhon";
echo "Hello " . $name . '<br>';

$welcome_text = "Welcome to the PHP Class - ";
$name = "Jhon Doe";
$welcome_text .= $name;

echo $welcome_text;