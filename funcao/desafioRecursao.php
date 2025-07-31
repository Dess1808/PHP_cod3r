<div class="titulo">Desafio Recursão</div>

<?php

/*
    imprimir nivel do valores no array, do mais interno para o mais externo

    resolução:
        tudo feito de com chamadas recursivas, no caso, para salvar o array mais externo
        e preciso fazer um chamada dupla recursiva, passando o novo array mais interno, deixando o array
        mais externo para a outra pilha que ira aguardar a finalização da pilha da "direita", para marcar os
        niveis, basta passar tambem um contador contador de nivel, nele e feito o incremento entre
        os numeros de niveis, para mantar o valor correto do nivel mais externo, foi feito um decremento 
        na variavel "countLevel" depois de incrementado para o proximo nivel, fazendo isso, mantenho o
        valor que deveria ser do nivel mais externo, quando o programa chamar a pilha "aguartante", o valor 
        do "nivel" estará correto!
*/

function imprimiRecursivo($array, $countLevel = 1){
    //caso base, enquanto existir array
    if ($array){
        //mudança de estado
        if (!is_array($array[0])){
            //contador de nivel
            for ($i = 0; $i < $countLevel; $i++)
                echo ">";
            echo " "; 
            echo $array[0] . PHP_EOL . "<br>";

            //proximo valor do array, chamda recursiva
            imprimiRecursivo(array_slice($array, 1), $countLevel);
        } else {
            //e feito uma chamada dupla recursiva! criando uma arvore recursiva

            //incremento para o proximo nivel mais interno
            $countLevel += 1;
            //subarray encontrado
            imprimiRecursivo($array[0], $countLevel);

            //passando o array superior menos o sub array que ja foi desempilhado
            imprimiRecursivo(array_slice($array, 1), $countLevel - 1); //decremento para o nivel anterior
        }
    } else {
        //quando a array estiver vazio, finalizar recursão
        return;
    }
}

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10, [1, 2, [3, 4,[5, 6]]]];

//formatar para imprimir no html
imprimiRecursivo($array);   
