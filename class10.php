<h2>PHP Array</h2>
<hr>

<?php

// $names = array();
// $names = [];

$names = array(
    "Akash",
    "Jhon",
    "Rony"
);

// var_dump($names);

$marks = [10, 40, 60, 90, 23, 70, 34];
echo $marks[2];
echo "<br>";

// print_r($marks);

$student = array(
    "name" => "Akash",
    'age' => 50,
    "result" => 3.5
);

echo "Name: " . $student['name'];
echo "<br>";
echo "Age: " . $student['age'];
echo "<br>";
echo "Result: " .  $student['result'];
echo "<br>";
print_r($student);
echo "<br>";

$students = array(
    array(
        "name" => "Akash",
        'age' => 50,
        "result" => 3.5
    ),
    array(
        "name" => "Jhon",
        'age' => 50,
        "result" => 3.5
    ),
    array(
        "name" => "Rony",
        'age' => 30,
        "result" => 3.1
    )
);

print_r($students);
echo "<br>";


foreach ($marks as $mark) {
    echo $mark . '<br>';
}

foreach ($student as $student_key => $student_value) {
    echo $student_key . ': ';
    echo $student_value . '<br>';
}
?>

<hr>

<?php

foreach ($students as $student_data) {
    // print_r($student_data);
    echo "<h2>Name: " . $student_data['name'] . "</h2>";
    echo "<p>Age: " . $student_data['age'] . "</p>";
    echo "<p>Result: " . $student_data['result'] . "</p>";
    echo "<hr>";
}












?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>