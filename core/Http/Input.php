<?php

namespace Core\Http;

// class input binding
class Input
{

    public static function hasPost(string $name): bool
    {
        return array_key_exists($name, $_POST);
    }
    public static function post(string $name)
    {
        return isset($_POST[$name]) && $_POST[$name] != '' ? $_POST[$name] : '';
    }
    public static function hasGet(string $name): bool
    {
        return array_key_exists($name, $_GET);
    }

    public static function get(string $name)
    {
        return isset($_GET[$name]) && $_GET[$name] != '' ? $_GET[$name] : '';
    }
}
