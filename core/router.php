<?php

class router


{

    public $routes = [

      'GET' => [],
      'POST' => []

    ];

    public static function load($file)

    {

      $router = new static;

      require $file;

      return $router;

    }


    public function get($uri, $controller)

    {

          $this->routes['GET'][$URI] = $controller;

    }



    public function post($uri, $controller)

    {

          $this->routes['POST'][$URI] = $controller;

    }



    public function direct($uri, $requesttype)

    {

      if (array_key_exists($uri, $this->routes[$requesttype]))

      {

        return $this->routes[$requesttype][$uri];

      }

      throw new exception('No route defined for this URI');

    }



}
