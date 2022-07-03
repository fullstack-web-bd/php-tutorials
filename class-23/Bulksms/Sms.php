<?php

namespace Class23\BulkSms;

class Sms
{
    public function setup($username, $password)
    {
    }

    public static function send($message)
    {
        return "Sent sms : " . $message;
    }
}
