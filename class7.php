<h2>PHP Math Functions</h2>
<hr>
<?php
echo pi();
echo '<br>';

echo abs(-10);
echo '<br>';
echo abs(10);
echo '<br>';
echo abs(-5.052);
echo '<br>';
echo min(10, 20, 5);
echo '<br>';
echo min([10, 20, 5]);
echo '<br>';
echo max(10, 20, 5);
echo '<br>';
echo max([10, 20, 5]);
echo '<br>';
echo sqrt(64);
echo '<br>';
echo sqrt(25);
echo '<br>';
echo (5 ** 2);
echo '<br>';
echo pow(5, 2);
echo '<br>';
echo pow(5, 3);
echo '<br>';

echo floor(5.2);
echo '<br>';

echo floor(5.9);
echo '<br>';


echo ceil(5.2);
echo '<br>';

echo ceil(5.9);
echo '<br>';

echo round(5.2);
echo '<br>';

echo round(5.9);
echo '<br>';

echo rand();
echo '<br>';

echo rand(0, 10);
echo '<br>';

$post_id = 12;
var_dump(is_numeric($post_id));
echo '<br>';

$post_id = "12===12";
var_dump(is_numeric($post_id));
echo '<br>';

$post_id = acos(8); // float(NAN)
var_dump($post_id);
echo '<br>';
var_dump(is_nan($post_id));
echo '<br>';

