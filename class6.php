<?php

$age = 30;

if ($age >= 60) {
    echo "Hi, You are old !";
} elseif($age >= 40) {
    echo "Hi, You are mid age !";
} elseif($age >= 18) {
    echo "Hi, You are an adult !";
} else {
    echo "Hi, You are a child !";
}

echo '<br>';
echo '------- Switch-case -------<br>';

$age = 100;

switch ($age) {
    case 10:
    case 15:
        echo "You are " . $age . " years old !";
        break;

    case 20:
        echo "You are 20 years old !";
        break;

    default:
        echo "Your age does not match.";
        break;
}

// if ($age === 10) {
//     echo "You are 10 years old !";
// } elseif ($age === 20) {
//     echo "You are 20 years old !";
// }
echo '<br>------- Vowel-Consonant check -------<br>';

$character = "E";
$is_vowel = false;

switch ($character) {
    case 'a':
    case 'A':
    case 'e':
    case 'E':
    case 'i':
    case 'I':
    case 'o':
    case 'O':
    case 'u':
    case 'U':
        $is_vowel = true;
        break;

    default:
        $is_vowel = false;
        break;
}

if ($is_vowel) {
    echo "Great. This is a Vowel.";
} else {
    echo "Sorry. This is a consonant.";
}

echo '<br>------- Even-odd check -------<br>';

$number = 11;

if ($number % 2 === 0) {
    echo $number . " is an even Number.";
} else {
    echo $number . " is an odd Number.";
}