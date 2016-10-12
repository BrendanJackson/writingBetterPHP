<?php

/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 10/7/16
 * Time: 11:05 PM
 */
class Router
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
//        uri==example.com/contact.php
       if (array_key_exists($uri, $this->routes))
       {
           return $this->routes[$uri];/*$uri*/
       }

       throw new Exception('No routes defined for this URI.');
    }

}