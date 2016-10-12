<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 10/8/16
 * Time: 7:58 PM
 */

/**
 * defines a route using the router Class
 */
$router->define([
    '/writingbetterphp/' => 'controllers/index.php',
    '/writingbetterphp/about/' => 'controllers/about.php',
    '/writingbetterphp/about/culture' => 'controllers/about-culture.php',
    '/writingbetterphp/contact' => 'controllers/contact.php'
]);
