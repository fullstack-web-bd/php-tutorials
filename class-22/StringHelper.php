<?php

class StringHelper
{
    public static function slugify($title, $replaced_character = '-'): string
    {
        // $title = trim($title);
        // $title = strtolower($title);
        // $slugify_text = str_replace(" ", $replaced_character, $title);

        // return $slugify_text;
        return str_replace(' ', $replaced_character, strtolower(trim($title)));
    }

    public static function removeFirstCharacter($string)
    {
        return $string;
    }
}
