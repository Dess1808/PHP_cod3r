<div class="titulo">Funções Anônimas</div>

<?php
/**
 *  atribuir funções em variveis 
 *  passar função como parametro
 *  retorno função em uma função
 *  obs: caracteristicas do paradigma funcional
 * 
 */

//função anonima
$soma = function($a, $b){
    return $a + $b;
};

//se definido em um variavel, e precisar colocar o "$"
echo $soma(1, 2);
echo PHP_EOL;

//Passando função por parametro
function outraSoma($a, $op, $b, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado";
}

echo outraSoma(2, '+', 2, $soma);
echo PHP_EOL;
