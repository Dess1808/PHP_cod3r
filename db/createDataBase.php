<?php

require_once "connection.php";

//connecte mysql
$connection = newConnection(null);

//sql
$result = $connection->query('CREATE DATABASE course_php');

if ($result){
    echo "Success query" . "<br>";
} else {
    echo "Error: " . $connection->error;
}







