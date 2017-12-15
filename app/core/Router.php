<?php


namespace App\Core;

class Router
{


    protected $routes = [

        'GET' => [],
        'POST' => []
    ];


    public function direct($uri, $requestType){
        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }else{
            throw new Exception('No routes defined');
        }
    }

    protected function callAction($controller, $action){
        $controller = "App\Controllers\\{$controller}";
        $controller = new $controller;
        if (! method_exists($controller, $action)){
            throw new Exception("$controller does not have $action action");
        }
        return $controller->$action();
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }


    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }


    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }
}