<?php

namespace Class23\Onnorokom;

class Sms
{
    public function setup($username, $password)
    {
    }

    public static function send($message)
    {
        return "Sent sms from Onnorokom SMS. Your SMS is : " . $message;
    }
}
