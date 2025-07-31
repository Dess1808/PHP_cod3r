<?php

//classe mais generica
interface Animal{
    function respirar();
}

interface Canino extends Animal{
    //podemos definir o tipo de retorno 
    function latir(): string;
}

//podemos mesmo implementar multiplas interfaces?
class Cachorro implements Canino{
    function respirar(){
        echo '**repirando**' . PHP_EOL;
    }

    function latir(): string{
        return 'AU au';
    }
}

$chuaua = new Cachorro();
$chuaua->respirar();
echo $chuaua->latir() . PHP_EOL;

//testes 
var_dump($chuaua instanceof Animal);
var_dump($chuaua instanceof Canino);