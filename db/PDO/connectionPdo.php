<?php
ini_set('display_errors', 1);

function newConnectionPdo($dataBase = 'course_php'){
    $host = "127.0.0.1:3306";
    $userName = "root";
    $passWord = "1234";

    try {
        $connection = new PDO("mysql:host=$host;dbname=$dataBase", $userName, $passWord);
        return $connection;
    } catch (PDOException $e){
        die('Error: ' . $e->getMessage());
    }
}