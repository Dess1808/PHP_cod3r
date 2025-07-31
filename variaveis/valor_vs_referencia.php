<div class="titulo">Valor vs Referênia</div>


<?php
/*
valor -> copia de valor
referencia -> endereço compartilhado
*/

//utilizando função para definir constante, padrão com undescore
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS . PHP_EOL . "<br>";

//utilizando o const
const NOVA_TAXA = 2.3;
echo NOVA_TAXA . PHP_EOL . "<br>";

//atribuind variavel em um constante
$variavel = 3.4;
//nao funciona
//const MAIS_UMA_NOVA_TAXA = $varivel; 

//metodo correto, utilizando o define
define('MAIS_UMA_NOVA_TAXA', $variavel);
echo MAIS_UMA_NOVA_TAXA . PHP_EOL . "<br>";

//operacao para atribuir em constante
const NOVA_CONSTANTE = 2 + 3;
echo NOVA_CONSTANTE . PHP_EOL . "<br>";

//alguns exemplos e constane do php
echo PHP_VERSION . PHP_EOL . "<br>";
echo PHP_INT_MAX . PHP_EOL . "<br>";
echo __LINE__ . PHP_EOL . "<br>";
echo __LINE__ . PHP_EOL . "<br>";
echo __FILE__ . PHP_EOL . "<br>";
echo __DIR__ . PHP_EOL . "<br>";


