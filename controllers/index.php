<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 10/7/16
 * Time: 10:31 PM
 */

$tasks = $database->selectAll('todos');

require ("views/index.view.php");