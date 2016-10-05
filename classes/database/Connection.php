<?php

/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 9/28/16
 * Time: 11:09 PM
 */

class Connection
{
    /**
     * Static functions do not need to be called in an instance,
     * you can call them with Class::staticFunction() or in this case Connection::make()
     */
    public static function make($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}