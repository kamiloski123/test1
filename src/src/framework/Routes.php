<?php

namespace Module\Framework;

class Routes
{
    private static array $routes = [];

    public static function add_route(string $method, string $uri, callable $callback): void
    {
        self::$routes[] = [
            'method' => $method,
            'uri' => $uri,
            'callback' => $callback];
    }
    public static function get_routes(string $method): array
    {
        $routes_filtered = [];
        foreach (self::$routes as $route){
            if($route['method']==$method){
                $routes_filtered[] = $route;
            }
        }
        return $routes_filtered;
    }
}

