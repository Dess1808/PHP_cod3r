<div class="titulo">Concatenação</div>

<?php
//exemplo simples
$title = "atribuição";

//atribuiões são identicas a outra linguagens

//mudando o tipo de uma variaveis atraves da atribuição
$numero = 10;
var_dump($numero) . "<br>";

$numero = $numero + 1.5;
var_dump($numero) . "<br>";

//operadores unarios
echo $numero++ . PHP_EOL . "<br>";
echo $numero-- . PHP_EOL . "<br>";

//concatenação de numeros
$numero .= 4;

//concatenação de texto
$texto  = "sou um texto";
$texto .= " sou outra parte do texto";
echo $texto . PHP_EOL . "<br>";

//valor default
$valor_inexistente = "qualquer valor";
echo $valor_inexistente . PHP_EOL . "<br>";

unset($valor_inexistente);

$valor = $valor_inexistente ?? "valor dafault";
echo $valor . PHP_EOL . "<br>";
