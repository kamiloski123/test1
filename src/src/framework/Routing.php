<?php

namespace Module\Framework;

class Routing
{
    private static string $method;

    public function init(): void
    {
        foreach (Routes::get_routes(self::$method) as $route) {
           match (self::$method){
                'GET' => $this->routes_get_do($route),
                'POST' => $this->routes_post_do($route)
            };
        }
    }
    function __construct()
    {
      self::$method = $_SERVER['REQUEST_METHOD'];
    }
    private function routes_post_do(array $route_head):void
    {
        if(!empty($_POST[$route_head['uri']])){
            echo $route_head['callback']();
        }
    }
    private function routes_get_do(array $route_head):void
    {
        if($_SERVER['REQUEST_URI']=='/'.$route_head['uri']){
            echo $route_head['callback']();
        }
    }
}