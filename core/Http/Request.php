<?php

namespace Core\Http;

// class for  request
class Request
{
    public static function isMethod(string $method): bool
    {
        return $this->getMethod() === strtoupper($method);
    }

    public static function getMethod()
    {
        $methodPost = strtoupper(Input::post('_method'));

        if (Input::hasPost('_method') && (in_array($methodPost, ['PUT', 'PATCH', 'DELETE']))) {
            return $methodPost;
        }

        return $_SERVER['REQUEST_METHOD'];
    }
    public static function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
