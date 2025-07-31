<div class="titulo">Variáveis Variáveis</div>

<?php
//acessar variaveis atres do conteudo de outras variaveis

//acessando atraves da referencia de uma variavel à outro
$a = "valorA";
$$a = "valorAA";
echo "$a {$$a} $valorA" . PHP_EOL;

//acessando atraves do nome dos valores das variaveis
$epa = "opa";
$opa = "vish";
$vish = "eita";
echo "$epa {$$epa} {$$$epa}" . PHP_EOL;