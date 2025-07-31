<?php namespace App;?>

<div class="titulo">subnamespace</div>

<?php
//exemplo de encadeamento de namespace em mesmo arquivo

const CONSTANTE = 123;
var_dump(__NAMESPACE__);

namespace App\Principal;
const CONSTANTE = 456;
var_dump(__NAMESPACE__);


namespace App\Principal\Especifico;
const CONSTANTE = 789;
var_dump(__NAMESPACE__);

//imprimindo o "niveis" de namespaces
echo \App\CONSTANTE . PHP_EOL;
echo \App\Principal\CONSTANTE . PHP_EOL;
echo \App\Principal\Especifico\CONSTANTE . PHP_EOL;


echo CONSTANTE . PHP_EOL;

//utilizar o consta para imprimir
echo constant('\\' . __NAMESPACE__ . '\CONSTANTE');