<?php

//exemplos de atributos statics

class estatico{
    public $naoEstatico = 'não estatico';
    //static equivale ao 'const' de outras linguagens, valor nunca será alterado, independete de quantas instancias sejam criadas
    public static $estatico = 'estatico';

    public function apresentar(){
        echo $this->naoEstatico;
        //dentro da classe
        echo self::$estatico; 
    }    
}

$obj = new estatico();
echo $obj->naoEstatico . PHP_EOL;
$obj->apresentar();
echo PHP_EOL;

//acessando diretamente o memobro estatico 
echo estatico::$estatico . PHP_EOL;

//modificando 
estatico::$estatico = 'Novo  estatico';
echo estatico::$estatico . PHP_EOL;

