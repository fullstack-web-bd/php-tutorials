<?php

namespace Akash\Nexmo;

use Akash\Onnorokom\Sms as OnnorokomSms;
use Akash\BulkSms\Helper as BulkSmsHelper;

class Sms
{
    public static bool $is_setup_done = false;

    public function setup($api_key)
    {
        self::$is_setup_done = false;
    }

    public static function send($message)
    {
        var_dump(self::$is_setup_done);
        echo '<br>';
        var_dump(BulkSmsHelper::getApiKey());
        echo '<br>';
        var_dump(Helper::getApiKey());
        echo '<br>';
        var_dump(Helper::checkValidDate());
        echo '<br>';

        if (!self::$is_setup_done) {
            // handle it with Onnorokom SMS
            return OnnorokomSms::send($message);
        }

        return 'Sent sms from Nexmo. Your SMS is : ' . $message;
    }
}
