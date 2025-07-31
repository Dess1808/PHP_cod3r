<?php
//comparando array de forma simples
$arr1 = ["nome" => "Vitoria", "idade" => 18];
$arr2 = ["nome" => "Vitoria", "idade" => 18];

//true
var_dump($arr1 == $arr2); echo "<br>";
//true
var_dump($arr1 === $arr2); echo "<br>";

echo PHP_EOL;

//mais teste
$arr3 = ["idade" => 18, "nome" => "Vitoria"];

//true
var_dump($arr1 == $arr3); echo "<br>";
//false
var_dump($arr1 === $arr3); echo "<br>";
//false
var_dump($arr1 != $arr3); echo "<br>";
//true
var_dump($arr1 !== $arr3); echo "<br>";