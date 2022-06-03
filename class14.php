<?php session_start(); ?>
<?php
// phpinfo();
?>

<h2>PHP Class 14 - Super Global Variables</h2>
<?php

function test()
{
    echo "Global Scope Data:: " . $GLOBALS['x'] . "<br>";
    $x = 12 + $GLOBALS['x'];
    // $GLOBALS['x'] = $x;
    $z = 20;
    echo "Inside Function:: " . $x . "<br>";
}

$x = 100;
$y = 11;
echo "Outside Function:: " . $x . "<br>";

test();

print_r($GLOBALS);
echo "<br>";
?>

<h2>Contact Us</h2>
<?php
// print_r($_POST);
// echo $_POST['name'] . '<br>';
// echo $_POST['subject']. '<br>';
// echo $_POST['password']. '<br>';

// if (isset($_REQUEST['name'])) {
//     echo $_REQUEST['name'];
// }
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['temp_password'])) {
        echo "<p>Your form is submitted !</p>";
    }
    ?>

    <label for="name">Name</label><br>
    <input type="text" id="name" name="name"> <br>
    <span style="color: red"><?php echo empty($_POST['name']) ? "Please give your name" : '' ?></span>
    <br>

    <label for="subject">Subject</label><br>
    <input type="text" id="subject" name="subject"> <br>
    <span style="color: red"><?php echo empty($_POST['subject']) ? "Please give subject" : '' ?></span>
    <br>

    <label for="temp_password">Temp Password</label><br>
    <input type="password" id="temp_password" name="temp_password"> <br>
    <span style="color: red"><?php echo empty($_POST['temp_password']) ? "Please give a temporary password to contact with you" : '' ?></span>
    <br>

    <input type="submit" value="Send" />
</form>

<hr>
<h2>$_SERVER</h2>
<?php
    // print_r($_SERVER);
    echo '<br>Host Name:' . $_SERVER['HTTP_HOST'];
    echo '<br>Browser Name:' . $_SERVER['HTTP_USER_AGENT'];
    echo '<br>Server IP Address:' . $_SERVER['SERVER_ADDR'];
    echo '<br>Server Port:' . $_SERVER['SERVER_PORT'];
    echo '<br>Current File Full Path:' . $_SERVER['PHP_SELF'];
    echo '<br>REQUEST_METHOD:' . $_SERVER['REQUEST_METHOD'];
?>

<hr>
<h2>$_COOKIE</h2>

<?php
print_r($_COOKIE);

// Create a Cookie
setcookie("user_name", "Akash", time() + 60*60*24, "/");

// Update Cookie
setcookie("user_name", "Polash", time() + 60*60, "/");

// Unset Cookie
// setcookie("user_name", "", time() - 60, "/");
?>

<hr>
<h2>$_SESSION</h2>
<?php

// Create a session
$_SESSION['user_name'] = "Akash";

// Update a session
$_SESSION['user_name'] = "Jhon Doe";
$_SESSION['password'] = "12345678";

// Delete a session
// session_unset();

// Destroy session
// session_destroy();

print_r($_SESSION);











echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
