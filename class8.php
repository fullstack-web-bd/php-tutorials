<h2>PHP String Functions</h2>
<hr>

<?php
$name = "jhon Doe jhon ";
echo ucfirst($name);
echo '<br>';

echo ucwords($name);
echo '<br>';


$name = "Jhon Doe jhon ";
echo lcfirst($name);
echo '<br>';

$name = "jhon Doe jhon ";
echo strtolower($name);
echo '<br>';

$post_title = "Our PHP Class No 8 ";
$post_slug = trim($post_title);
var_dump($post_slug);
echo '<br>';
$post_slug = strtolower($post_slug);
$post_slug = str_replace(" ", "-", $post_slug);
echo $post_slug;
echo '<br>';

$post_title = "Our PHP Class No 8 ";
echo str_replace(" ", "-", strtolower(trim($post_title)));
echo '<br>';

echo strtoupper($name);
echo '<br>';

var_dump(rtrim($name));
echo '<br>';

var_dump(ltrim($name));
echo '<br>';

var_dump(strlen($name));
echo '<br>';

echo "Your name is " . strlen("Akash") . " characters.";
echo '<br>';

echo substr($name, 0, 4);
echo '<br>';

echo substr($name, 0, 4);
echo '<br>';

var_dump(substr($name, 5, 3));
echo '<br>';

var_dump(substr_replace($name, 'jhon', 0, 10)); // string(8) "jhonhon "
echo '<br>';

var_dump(strstr($name, "Doe"));
echo '<br>';

var_dump(strstr($name, "Doen"));
echo '<br>';

// if (! strstr($name, "Akash")) {
//     echo "Sorry, Name doesn't match !";
// }


var_dump(strpos($name, "Doe"));
echo '<br>';

var_dump(strpos($name, "Doen"));
echo '<br>';

// if (! strpos($name, "Akash")) {
//     echo "Sorry, Name doesn't match !";
// }

var_dump(strpos($name, "doe"));
echo '<br>';

var_dump(stripos($name, "doe"));
echo '<br>';


$name = "Akash";
var_dump(str_split($name));
echo '<br>';

// print "welcome " . $name;
// $test = printf("Welcome %s. And you are good....", $name);
$welcome_text = "Welcome " . $name . ". And you are good.";
$test = sprintf("Welcome %s. And you are good....", $name);

// echo $welcome_text;
echo $test;
echo '<br>';


$name = "jhon Doe jhon ";
$name_array = explode(" ", $name);
var_dump($name_array);
echo '<br>';

$name_again = implode("-", $name_array);
var_dump($name_again);
echo '<br>';

var_dump(md5("akash"));
echo '<br>';

var_dump(sha1("akash"));
echo '<br>';

$query = "page=1&search=laravel";
parse_str($query, $result);

var_dump($result);

echo strrev($name);
echo '<br>';

echo str_shuffle($name);
echo '<br>';















?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>