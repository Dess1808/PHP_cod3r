<?php

function newConnection($database){
    $localhost = "127.0.0.1:3306";
    $user = "root";
    $password = "1234";

    $connection = new mysqli($localhost, $user, $password, $database);

    //errors
    if (!$connection->connect_error){
        echo "Connection Success" . "<br>";
    } else {
        echo "Error: " . $connection->connect_error;
    }

    return $connection;
}