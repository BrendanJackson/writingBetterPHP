<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 9/28/16
 * Time: 11:08 PM
 */

/**
 * This Varlable connects to the DB w/ Connection.php,
 * establishes that connection with the query builder,
 * and builds any queries with the QueryBuilder class
 *
 */
//LOAD CORE>Instance of QueryBuilder connected to connections database
$database = require ('core/bootstrap.php');

//create a new $router
$router = new Router;

//require
require ('routes.php');
$uri = $_SERVER['REQUEST_URI'];
require $router->direct($uri);
//var_dump($router->direct('about/culture'));
//$uri = trim($_SERVER['REQUEST_URI'], '/');
//require $router->direct(trim($_SERVER['REQUEST_URI']), '/');

//require Router::load('routes.php')
//    ->direct($uri);