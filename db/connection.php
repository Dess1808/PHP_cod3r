<?php
ini_set('display_errors', 1);

function newConnection($database){
    $localhost = "127.0.0.1:3306";
    $user = "root";
    $password = "1234";

    $connection = new mysqli($localhost, $user, $password, $database);

    //errors
    if ($connection->connect_error){
        echo "Error: " . $connection->connect_error;
    }

    return $connection;
}