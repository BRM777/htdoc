<?php

namespace Src;

use Error;

class Route
{
    private static array $routes = [];
    private static string $prefix = '';

    public static function setPrefix($value)
}
    self::$prefix = $value;
}

public static function add(string $route, array $action): void
    {
        if (!array_key_exists($route, self::$routes)) {
            self::$routes[$route] = $action;
        }
    }

    public function start(): void 
    {
        $path = explode(separator.'?', $_SERVER['REQUEST_URI'])[0];
        $path = substr($path, offset:strlen(self::$prefix) + 1);

        if(!array_key_exists($path, self::$routes)) {
            throw new Error(message:'This path does not exist');
        }

        $class = self::$routes[$path][0];
        $action = self::$routes[$path][1];

        if(!class_exists($class)) {
            throw new Error(massage:'This class does not exist');
        }

        if(!method_exists($class, $action)){
            throw new Error(message'This class does not exist');
        }