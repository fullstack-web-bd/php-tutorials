<?php
include 'Mammals.php';
include 'Humans.php';

// $mammals = new Mammals();
// $mammals->protectedMethod();

$human = new Humans();
$human->think();

$human->sayImAMammal();
$human->sayWhoAmI();
$human->getParentProtectedData();


echo "<br>";

class A {
    public function __construct() {
        echo "class A<br>";
    }
}

class B extends A {
    public function __construct() {
        echo "class B<br>";
    }
}

class C extends B {
    public function __construct() {
        echo "class C<br>";
    }
}

$aObj = new A();
$bObj = new B();
$cObj = new C();