<?php

class Human {
    public string $name = "Akash";
    public const DATE_OF_BIRTH = "1995-30-12";
    public static $static_dob = "2022-01-01";
    public static $totalUsers = 10;

    public function getModifiedName()
    {
        $this->name = "Polash";
        // $this::DATE_OF_BIRTH = "2022-01-01"; // error
        return "Mr." . $this->name;
    }

    public static function getDob()
    {
        return static::$static_dob;
        // return self::$static_dob;
    }

    public static function inc()
    {
        static::$totalUsers++;
    }

    public static function getTotalUsers()
    {
        return self::$totalUsers;
    }

    public static function getClassName()
    {
        return __CLASS__;
    }

    public static function printClass()
    {
        echo static::getClassName();
    }
}