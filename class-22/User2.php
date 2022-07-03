<?php

class User2 extends Human {
    public static $totalUsers = 100;

    public static function inCrementTotalUser() {
        self::$totalUsers++;
    }

    public static function getClassName()
    {
        return __CLASS__;
    }
}