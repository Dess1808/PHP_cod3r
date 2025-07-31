<div class="titulo">Função que retorna Função</div>

<?php

//um função que retorna outra função 
function soma($a){
    /*a variavel recebe o retorno da função, que é um função anonima (closure)
    como na primeira atribuição é a função original, basta chamar a variavel que agora
    é um callabel passando um parametro.
    */

    return function($b) use ($a){
        return $a + $b;
    };
}

//exemplo 1
echo soma(3)(3) . PHP_EOL . "<br>";

//exemplo 2
$outraSoma = soma(2); //primeira atribuição
echo $outraSoma(3) . PHP_EOL . "<br>"; //agora com o 2 atribuido, o returno da função recebe novos parametros
echo $outraSoma(10) . PHP_EOL . "<br>";

//obs: é como se o php armazenasse em memoria a primeira atribuição e utiliza-se a mesma nas proximas interações

