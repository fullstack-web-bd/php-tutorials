<?php

$a = 10;
$b = 10;
var_dump($a == $b);
echo "<br>";

$a = 10;
$b = "10";
var_dump($a === $b);
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a !== $b);
echo "<br>";

var_dump($a <> $b);
echo "<br>";

$a = 20;
$b = 30;

var_dump($a > $b); // false
echo "<br>";

var_dump($a < $b); // true
echo "<br>";

$a = 10;
$b = 10;
var_dump($a <= $b); // true
echo "<br>";


$a = 30;
$b = 20;
var_dump($a >= $b); // true
echo "<br>";

$a = 10;
$b = 10;
var_dump($a <=> $b); // 0
echo "<br>";

$a = 15;
$b = 10;
var_dump($a <=> $b); // 1
echo "<br>";


$a = 15;
$b = 20;
var_dump($a <=> $b); // -1
echo "<br>";

$x = true;
$y = false;
var_dump($x and $y); // false
echo "<br>";


$x = true;
$y = true;
var_dump($x and $y); // true
echo "<br>";


$x = true;
$y = false;
var_dump($x && $y); // false
echo "<br>";

$x = true;
$y = false;
var_dump($x or $y); // true
echo "<br>";


$x = false;
$y = false;
var_dump($x or $y); // false
echo "<br>";

$x = true;
$y = true;
var_dump($x or $y); // true
echo "<br>";

$x = true;
$y = false;
var_dump($x || $y); // true
echo "<br>";


$x = true;
var_dump(!$x); //false
echo "<br>";


$x = false;
var_dump(!$x); //true
echo "<br>";

$x = true;
$y = true;
var_dump($x xor $y);
echo "<br>";

$x = true;
$y = false;
var_dump($x xor $y);
echo "<br>";

$is_logged_in = true;
var_dump($is_logged_in ? 'Hi User !' : 'Hi Guest !');
echo "<br>";


$is_logged_in = false;
var_dump($is_logged_in ? 'Hi User !' : 'Hi Guest !');
echo "<br>";


$result = null;
$output = $result ?? "Not found !";
echo $output;
echo "<br>";

$result = "GPA-5.0";
$output = $result ?? "Not found !";
echo $output;
echo "<br>";