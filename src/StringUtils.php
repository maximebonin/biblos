<?php
/**
 * Created by PhpStorm.
 * User: maxbon
 * Date: 18-01-01
 * Time: 19:00
 */

namespace biblos;


class StringUtils
{
    public static function getCurrentUri()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = '/' . trim($uri, '/');

        return $uri;
    }
}