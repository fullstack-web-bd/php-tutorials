<h2>PHP Array Part 2</h2>
<hr>

<?php

// $names = array();
// $names = [];

$names = array(
    "Akash",
    "Jhon",
    "Rony",
    "Polash"
);

echo "<h3>count() function</h3>";
echo count($names);
echo "<br>";

echo "<h3>sizeof() function</h3>";
echo sizeof($names);
echo "<br>";


echo "<h3>implode() function</h3>";
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}
echo "<br>";

// Join array elements with a string
$names_print = implode(", ", $names);
echo $names_print;

echo "<br>";

echo "<h3>explode() function</h3>";
$names_again = explode(", ", "Akash, Jhon, Rony, Polash");
print_r($names_again);

echo "<br>";
echo "<br>";


echo "<h3>array_push() function</h3>";
$students = array(
    array(
        "name" => "Akash",
        'age' => 50,
        "result" => 3.5
    ),
    array(
        "name" => "Jhon",
        'age' => 50,
        "result" => 3.0
    ),
    array(
        "name" => "Doe",
        'age' => 50,
        "result" => 3.6
    ),
    array(
        "name" => "Rony",
        'age' => 30,
        "result" => 2.5
    )
);

$good_students = [];
// print_r($good_students);
// echo "<br>";

// array_push($good_students, "Akash");
// print_r($good_students);
// echo "<br>";

// array_push($good_students, "Polash");
// print_r($good_students);
// echo "<br>";

// array_unshift($good_students, "Jhon Doe");
// print_r($good_students);
echo "<br>";

foreach ($students as $student_data) {
    if ($student_data['result'] >= 3.5) {
        array_push($good_students, $student_data);
    }
}

print_r($good_students);
echo "<br>";


echo "<h3>array_pop() function</h3>";
echo array_pop($names);
echo "<br>";
print_r($names);

echo "<h3>array_shift() function</h3>";
echo "<br>";
array_shift($names);
print_r($names);
echo "<br>";


$student = array(
    "name" => "Akash",
    'age' => 50,
    "result" => 3.5,
    // "mother_name" => "Mina Begum"
);


echo "<h3>array_keys() function</h3>";
print_r(array_keys($student));
echo "<br>";


echo "<h3>array_values() function</h3>";
print_r(array_values($student));
echo "<br>";

// echo $student['mother_name'];
// echo "<br>";


$student = array(
    "name" => "Akash",
    'age' => 50,
    "result" => 3.5,
    "mother_name" => "Mina Begum"
);


echo "<h3>in_array() function</h3>";
if (in_array('Akash2', $student)) {
    echo "Hi, It's exist";
}
echo "<br>";


echo "<h3>key_exists() function</h3>";
if (key_exists('mother_name', $student)) {
    echo 'Mother Name: ' . $student['mother_name'];
}
echo "<br>";


echo "<h3>unset() function</h3>";
print_r($student);
echo "<br>";

unset($student['mother_name']);
print_r($student);
echo "<br>";


echo "<h3>is_array() function</h3>";

$student_name = "Akash";
// echo $student_name['name'];

if (is_array($student_name)) {
    echo $student_name['name'];
}

$student_name = [
    'age' => 28
];

if (is_array($student_name) && key_exists('name', $student_name)) {
    echo $student_name['name'];
}
echo "<br>";


echo "<h3>array_search() function</h3>";
$searched_key = array_search("Akash", $student);
if ($searched_key) {
    echo $student[$searched_key];
}


echo "<h3>array_replace() function</h3>";
$replace_student_data = ['age' => 40];
$replace_student_data2 = ['age' => 60, 'result' => 4.0];
echo "<br>";

$replaced_student = array_replace($student, $replace_student_data, $replace_student_data2);

print_r($replaced_student);


echo "<h3>array_reverse() function</h3>";
echo "<br>";
$marks = [10, 20, 40];
print_r(array_reverse($marks));
echo "<br>";


echo "<h3>array_sum() function</h3>";
echo array_sum($marks);
echo "<br>";

$total_marks = 0;
foreach ($marks as $mark) {
    $total_marks += $mark;
}
echo $total_marks;
echo "<br>";



echo "<h3>compact() function</h3>";
$name = "Akash";
$age = 28;

$compact_array = compact('name', 'age');
print_r($compact_array);
echo "<br>";

extract($student);

echo $result;
echo "<br>";



echo "<h3>array_merge() function</h3>";
$marks = [50, 10, 20, 40];
// sort($marks);
// print_r($marks);

$marks_of_class_8 = [50, 30, 100];
$marks_of_class_9 = [90];

$total_marks_data = array_merge($marks, $marks_of_class_8, $marks_of_class_9);

print_r($total_marks_data);

echo "<br>";

print_r($student);


echo "<h3>Array Filter<h3>";

$new_students = array_filter($student, function($s_value){
    return floatval($s_value) > 3;
});

print_r($new_students);


echo "<h3>array_reduce() function</h3>";
$a = array(1, 2, 3, 4, 5);

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

echo array_reduce($a, 'sum');







?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>