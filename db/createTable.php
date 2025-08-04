<div class="titulo">Create Table</div>

<?php
ini_set('display_errors', 1);

//https://www.php.net/manual/en/mysqli.query.php

/*
    values table
    id - int(6) unsigned auto-increment primary key
    name - varchar(100) not null
    birth - date
    email  varchar(100) not null
    site varchar(100)
    children int,
    salary float
*/

require_once "connection.php";

//connection
$connection = newConnection('course_php');

//query create tables!!!
//DDL - Data Definition Language
$result = $connection->query("
    CREATE TABLE register(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        birth DATE,
        email VARCHAR(100) NOT NULL,
        site VARCHAR(100),
        children INT,
        salary FLOAT
    );
");

if ($result){
    echo "Query Sucess :)" . "<br>";
} else {
    echo "Error: " . $connection->error;
}

$connection->close();