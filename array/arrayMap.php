<div class="titulo">Array - Map</div>

<?php
//map, chave valor
$lista = array(
    "a",
    "cinco" => "b",
    8 => "d",
    "e", 
    6 => "f",
    "g",
    8 => "h"
);
echo var_dump($lista[10]) . "<br>";
//tomar cuidado com chaves hetorogeneas, um confusão desnecessaria


$dados = array(
    "idade" => 25, 
    "cor" => "laranja",
    "peso" => 49.5
);

echo var_dump($dados) . "<br>";

//print_r utilizado para imprimir estruras array
print_r($dados) . PHP_EOL;
echo "<br>";

//output key
print($dados["idade"]) . PHP_EOL . "<br>";
print($dados["cor"]) . PHP_EOL . "<br>";
print($dados["peso"]) . PHP_EOL . "<br>";


