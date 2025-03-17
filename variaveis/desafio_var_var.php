<div class="titulo">Desafio variável variável</div>

<?php
echo <<<enuciado
Imprimir a mesma frase utilizando variaveis.

frase: "Nossa! Eu consegui responder esse desafio".
enuciado . PHP_EOL . "<br>";

$a = "Nossa";
$Nossa = "Eu";
$Eu = "consegui";
$consegui = "responder";
$responder = "esse";
$esse = "desafio";

echo "Nossa! Eu consegui responder esse desafio." . PHP_EOL . "<br>";
echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}." . PHP_EOL . "<br>";
