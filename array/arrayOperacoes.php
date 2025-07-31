<?php
$dados1 = [
    "nome" => "João da Silva",
    "idade" => 18
];

$dados2 = [
    "nome" => "Maria da Silva",
    "naturalidade" => "João Pessoa"
];

//contatena os dois maps
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo PHP_EOL;

//array randomico
$indice = array_rand($dadosCompletos);
print_r($dadosCompletos[$indice]);

echo PHP_EOL;

//unset em map u
unset($dadosCompletos["nome"]);
print_r($dadosCompletos);

echo PHP_EOL;

//sobrepondo 
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

//não da para concaterner strings? creio que na nova realese estaja depreciatdo esse modo de concat
//$decimais = $impares + $pares;
//echo $decimais;

$decimais = array_merge($impares, $pares);
print_r($decimais);

echo PHP_EOL;

//ordenando valores
sort($decimais);
print_r($decimais);