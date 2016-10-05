<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 10/4/16
 * Time: 8:43 PM
 *
 * Stores all sensitive data in a single array
 *
 */
return [
    /**
     * database connection info, called in bootstrap then sent to Connection.php
     */
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'mytodos', /*why not ;dbname=mytodo?*/
        'username' => 'root',
        'password' => 'evanetra',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]
];