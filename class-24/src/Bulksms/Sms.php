<?php

namespace Akash\BulkSms;

class Sms
{
    // use FirstTrait;

    public string $name = "Akash";

    public function setup($username, $password)
    {
    }

    public static function send($message)
    {
        return "Sent sms : " . $message;
    }
}
