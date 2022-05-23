<h2>PHP Loop</h2>
<hr>

<?php
// Even Number Program:

// for ($i = 0; $i <= 100; $i += 2 ) {
//     echo $i . "<br>";
// }

echo "<h2>EVEN Number Program:</h2>";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo $i . "<br>";
    }
}

// Odd Number
// echo "<h2>ODD Number Program:</h2>";
// for ($i = 1; $i <= 100; $i += 2 ) {
//     echo $i . "<br>";
// }

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 1) {
        echo $i . "<br>";
    }
}


echo "<h2>While Loop:</h2>";

// while (1==1) {
//     echo "Hello";
//     break;
// }

$i = 0;
while ($i <= 100) {
    if ($i % 2 === 0) {
        echo $i . "<br>";
    }

    $i++;
}

echo "<h2>Do-while Loop:</h2>";
$j = 0;
do {
    echo $j . "<br>";

    $j++;
} while ($j <= 15);


echo "<h2>Foreach Loop:</h2>";

$playerNames = [
    "Tamim Iqbal",
    "Shakib Al Hasan",
    "Mushfiqur Rahim",
];

?>

<ol>
    <?php
    foreach ($playerNames as $player) {
        echo "<li><b>" . $player . "</b></li>";
    }
    ?>
</ol>

<?php
echo "<h2>Multiplication:</h2>";

$number = 37;

for ($i = 1; $i <= 10; $i++) {
    $multiplication = $number * $i;
    echo $number . " X " . $i . " = " . $multiplication . "<br>";
}









?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>