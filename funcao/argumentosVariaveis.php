<div class="titulo">Argumentos Variáveis</div>

<?php

/**
 * o PHP cria um parametro do tipo "array", quando inserido a notação de "argumento variavel"
 * 
 *
 */

 //o parametro automaticamente e um array
function somaNumeros(...$numeros){
    $resultado = 0;
    foreach($numeros as $numero){
        $resultado += $numero; 
    }

    return $resultado;
}

echo somaNumeros(1, 2, 3, 5, 6, 7, 8);

echo PHP_EOL;

//se caso for passado um array como parametro ?
/*
$array = [1, 2, 3, 4, 5, 6, 7, 8];

//o php transforma automaticamente o array em valores
function outraSomaDeNumeros(...$array){
    $resultado = 0;
    foreach($array as $numero){
        $resultado += $numero; 
    }

    return $resultado;
}

//talvez a nova versão do php não libera mais passar "array" como parametro variavel, pesquisar sobre
//echo outraSomaDeNumeros($array);
*/

//parametros normais com parametros variaveis
function membros($titular, ...$dependentes){
    echo "Titular = $titular" . PHP_EOL;
    foreach($dependentes as $dependente){
        echo "Dependete = $dependente" . PHP_EOL;
    }
}

membros("antonio", "gabriel", "alexandre", "Gercina");
echo PHP_EOL;
membros("antonio");
