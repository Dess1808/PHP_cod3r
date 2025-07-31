<?php
//chamados recursivas para imprimir um array

//https://panda.ime.usp.br/pensepy/static/pensepy/12-Recursao/recursionsimple-ptbr.html


/*
    subtr() -> extrau substring
    implode() -> transforma array em string
    str_split() -> converte array em strings
    array_slice() -> extrai elementos de array
*/

/*
$array  = [1, 2, 3, 4, 5];

//imprimindo de forma recurvisa
echo $array[0] . PHP_EOL;

$array = array_slice($array, 1);
echo $array[0] . PHP_EOL;

$array = array_slice($array, 1);
echo $array[0] . PHP_EOL;

$array = array_slice($array, 1);
echo $array[0] . PHP_EOL;

$array = array_slice($array, 1);
echo $array[0] . PHP_EOL;
*/


/*
$array = [1, 2, [1, 3]];

function imprimiRecursivo($array){
    //caso base
    if (count($array) <= 0){
        return;
    }

    //mudança de estado
    if (!is_array($array[0])){
        echo $array[0] . PHP_EOL;

        //proximo valor do array
        return imprimiRecursivo(array_slice($array, 1));
    } else {
        //subarray encontrado
        return imprimiRecursivo($array[0]);
    }
}

imprimiRecursivo($array);
*/

//vou precisar de um incremento


/*
function imprimiRecursivo($array, $countLevel = 1){
    //caso base, enquanto existir array
    if ($array){
        //mudança de estado
        if (!is_array($array[0])){
        //contador de nivel
        for ($i = 0; $i < $countLevel; $i++)
            echo ">";
        echo " "; 
        echo $array[0] . PHP_EOL;

        //proximo valor do array
        imprimiRecursivo(array_slice($array, 1), $countLevel);
        } else {
            $countLevel += 1;
            //subarray encontrado, fazer contagem quando
            imprimiRecursivo($array[0], $countLevel);

            //passando o array superior
            imprimiRecursivo(array_slice($array, 1), $countLevel - 1);
        }
    } else {
        return;
    }

    //OBS: ele entra mais não consegue sair

}

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

imprimiRecursivo($array);
*/
