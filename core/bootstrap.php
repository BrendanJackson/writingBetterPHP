<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 9/28/16
 * Time: 11:49 PM
 * Bootstrap is your start up work
 * It is a factory to build all your queries for your index page
 *
 *
 *
**/
/*how you could have written it*/
/*$query = Connection::make();*/
//$query = new QueryBuilder($pdo);
//$query = new QueryBuilder(Connection::make());
$config = require ('config.php');
require ('database/QueryBuilder.php');
require ('database/Connection.php');
/**
 * Passes our PDO connection to our QueryBuilder
 * All builder methods are now available connected to DB name in connection
 */
return new QueryBuilder(
    //this is the instance of connection and its static make method
    Connection::make($config['database']) //references config files database array
);


//$allOfTableName = $query->selectAll('tableName');

