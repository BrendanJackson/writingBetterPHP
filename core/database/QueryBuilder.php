<?php

/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 9/28/16
 * Time: 11:26 PM
 */
class QueryBuilder
{
    protected $pdo;

    /**
     *
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Runs a query from a given table name
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS); /* ,'task'    {'$table'}*/
    }
}