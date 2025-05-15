<?php namespace contexto;?>

<div class="titulo">Básico de Namespace</div>

<?php
// o namespace precisar esta na primeira linha do arquivo php
// alguns exemplos básicos de namespace
/*
    - Definir constante associando ao namespace
    - existe o "namespace raiz" do php, local onde estão dos os recursos padrão do php
    - Com o "define()" vc precisa explicitamente definir o namespace que será associado a variavel, função ou constante =
    - existe o conceito de subnamespace, ou seja, namespace associado a outros namespaces, como parta e subpastas
    - existe o acesso de forma relativa e absoluta
*/

//definido constantes associadas a namespace
const CONSTANTE1 = 123;
define('contexto\CONSTANTE2', 123);
//definindo outro namespace
define('outro_contexto\CONSTANTE3', 123);
define(__NAMESPACE__ . '\CONSTANTE3', 123);


//com Funções
//contexto atual
function soma($a, $b){
    return $a + $b;
}


function strpos($text, $str){
    return "palavra buscada '{$str}' no texto '{$text}'";
}

//testes
echo CONSTANTE2 . PHP_EOL;

//acessando "contexto\contexto\CONSTANTE2"
//echo contexto\CONSTANTE2 . PHP_EOL;

//referenciando ao namespace atual
echo \contexto\CONSTANTE2 . PHP_EOL;

//outro namespace
echo \outro_contexto\CONSTANTE3 . PHP_EOL;

//mesma constante, namespaces diferentes
echo \contexto\CONSTANTE3 . PHP_EOL;

//com funções
echo \contexto\soma(1, 2) . PHP_EOL;

echo strpos('string teste de busca', 'busca') . PHP_EOL;

//na raiz
echo \strpos('string teste de busca', 'busca') . PHP_EOL;


