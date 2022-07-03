<?php
require_once 'Human.php';
require_once 'User2.php';
require_once 'StringHelper.php';

// $human = new Human();
// // echo $human->name;
// echo $human->getModifiedName();
// echo "<br>";
// echo $human::DATE_OF_BIRTH;

// echo Human::DATE_OF_BIRTH;
// Human::$static_dob = "2021-01-01";
// echo Human::$static_dob;

// echo Human::getDob();
echo Human::$totalUsers . '<br>';
Human::inc();
Human::inc();
Human::inc();
Human::inc();
echo Human::getClassName(). '<br>';
echo Human::$totalUsers . '<br>';

// User2::inCrementTotalUser();

echo User2::$totalUsers . '<br>';
User2::inc();
echo User2::$totalUsers . '<br>';
echo User2::getClassName(). '<br>';
User2::printClass(). '<br>';
// echo User2::getTotalUsers(). '<br>';
echo '<br>-------------<br>';
// $stringHelper = new StringHelper();
echo StringHelper::slugify("    This is a very beautiful post..  ");
echo StringHelper::removeFirstCharacter("    This is a very beautiful post..  ");