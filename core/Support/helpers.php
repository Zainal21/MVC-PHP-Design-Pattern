<?php
// helper function

function public_path(string $file = null)
{
    if ($file) {
        return dirname(dirname(dirname(__FILE__))).'/www'.'/'.$file;
    }

    return dirname(dirname(dirname(__FILE__))).'/www';
}

function base_path(string $file = null)
{
    if ($file) {
        return dirname(dirname(dirname(__FILE__))).'/'.$file;
    }

    return dirname(dirname(dirname(__FILE__)));
}
