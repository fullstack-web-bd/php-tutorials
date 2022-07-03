<?php

require_once "BulkSms/Helper.php";
require_once "BulkSms/Sms.php";
require_once "Nexmo/Helper.php";
require_once "Nexmo/Sms.php";
require_once "Onnorokom/Sms.php";

use Class23\BulkSms\Sms as BulkSms;
use Class23\Nexmo\Sms as NexmoSms;
use Class23\Onnorokom\Sms as OnnorokomSms;

echo BulkSms::send("Hi, Akash");
echo "<br>";

// echo NexmoSms::send("We are on Holiday, Please enjoy your leave...");
echo Class23\Nexmo\Sms::send("We are on Holiday, Please enjoy your leave...");
echo "<br>";

echo OnnorokomSms::send("We are on Holiday, Please enjoy your leave...");
