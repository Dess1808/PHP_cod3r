<?php namespace Outro\Nome;?>

<div class="titulo">Use e As</div>

<?php

//namespace atual
echo __NAMESPACE__ . PHP_EOL;

require('outroArquivoAsUse.php');

const CONSTANTE = 456;

function soma($a, $b){
    return $a . $b;
}

class Classe{
    public $var;

    public function func(){
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . PHP_EOL;
    }
}


//testes
//atual
echo \outro\Nome\CONSTANTE . PHP_EOL;

//outro namespace
echo \Nome\Bem\Grande\CONSTANTE . PHP_EOL;

//utilizando a CONSTANTE de outro namespace
use const \Nome\Bem\Grande\CONSTANTE;
echo CONSTANTE . PHP_EOL;

//atual
echo soma(1, 2) . PHP_EOL;

//outro namespace
echo \Nome\Bem\Grande\soma(1, 2) . PHP_EOL;

//utilizando alias em funções
use function \Nome\Bem\Grande\soma as outraSoma;
echo outraSoma(1, 2) . PHP_EOL;


//exemplos com classes
$obj = new \Nome\Bem\Grande\Classe();
$obj->func(); echo PHP_EOL;


$obj2 = new \Outro\Nome\Classe();
$obj2->func(); echo PHP_EOL;


//utilizando alias no namespace inteiro
use \Nome\Bem\Grande as ctx;
echo ctx\CONSTANTE . PHP_EOL;

echo ctx\soma(1, 3) . PHP_EOL;

$obj3 = new ctx\Classe();
$obj3->func(); echo PHP_EOL;

