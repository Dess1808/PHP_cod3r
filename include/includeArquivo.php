<?php
//exemplos simples de include
//arquivo original que ira conter variveis e funções utilizaveis 

echo 'estamos no includeArquivo.php' . PHP_EOL . "<br>";

$variavel = 'estou setada';

//se caso não exister função, então crie
//porem o function_exists retorna false quando não existe função, por isso a negação no final
if (!function_exists('soma')){
    function soma($a, $b){
        return $a + $b;
    } 
}