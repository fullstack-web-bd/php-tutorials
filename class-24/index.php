<?php

// require_once "BulkSms/Helper.php";
// require_once "BulkSms/Sms.php";
// require_once "Nexmo/Helper.php";
// require_once "Nexmo/Sms.php";
// require_once "Onnorokom/Sms.php";

// function autoload_this($className)
// {
//     // var_dump($className); // Akash\BulkSms\Sms
//     $className = str_replace("\\", "/", $className);
//     $fileName = __DIR__ . '/' . substr($className, 6) . '.php';

//     if (file_exists($fileName)) {
//         require_once $fileName;
//     }
// }

// spl_autoload_register('autoload_this');

// spl_autoload_register(function ($className){
//     var_dump($className);
// }, true, true);

include_once __DIR__ . '/vendor/autoload.php';

use Akash\BulkSms\Sms as BulkSms;
use Akash\Nexmo\Sms as NexmoSms;
use Akash\Nexmo\Helper as NexmoSmsHelper;
use Akash\Onnorokom\Sms as OnnorokomSms;

$sms = new BulkSms();
var_dump($sms);

// $NexmoSms = new NexmoSms();
// var_dump($NexmoSms);

// $nexmoHelper = new NexmoSmsHelper();
// var_dump($nexmoHelper);


// echo BulkSms::send("Hi, Akash");
// echo "<br>";

// // echo NexmoSms::send("We are on Holiday, Please enjoy your leave...");
// echo Class23\Nexmo\Sms::send("We are on Holiday, Please enjoy your leave...");
// echo "<br>";

// echo OnnorokomSms::send("We are on Holiday, Please enjoy your leave...");

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
// echo $slugify->slugify('How to start coding in PHP the right way...');
echo $slugify->slugify('কিভাবে কোডিং করতে হয়?');

