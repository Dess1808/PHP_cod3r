<div class="titulo">Array</div>

<?php
$lista = array(1, 2.4, "texto");
echo var_dump($lista);
echo "<br>";

//output
echo $lista[0] . PHP_EOL . "<br>";
echo $lista[1] . PHP_EOL . "<br>";
echo $lista[2] . PHP_EOL . "<br>";

//string são tratadas com lista
$texto = "eu sou uma frase";
echo $texto[3];

//obs: cuidado com caracteres especiai como "pontuação", em php e considerado como novo elemnto
