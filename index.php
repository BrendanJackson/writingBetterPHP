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
//Instance of QueryBuilder connected to connections database
$query = require ('bootstrap.php');

/**
 * Naming a tables query
 * $tablesPurpose = $query->selectAll($table);
 */


//require ('classes/Task.php');

$tasks = $query->selectAll('todos');
/**
 * Iterates over through array
 * Returns foo for each item of an array, similar to foreach
 * Think foreach $tasks as ($task) perform function
 * foreach may be faster?
 * */
//$tasks = array_map(function ($task){
//    return 'foo';
//}, $tasks);
//var_dump($tasks);


/**
 * loads the view, giving it all of index's assets
 */
require ('index.view.php');