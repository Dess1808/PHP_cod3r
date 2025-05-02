<?php

//exemplos de modificadores

class modificadores{
    public $publico = 'publico';
    protected $protegido = 'protegido';
    private $privado = 'privado';

    public function apresentar(){
        $this->funcaoPrivada();
        echo $this->publico . PHP_EOL;
        echo $this->protegido . PHP_EOL;
        echo $this->privado . PHP_EOL;
    }

    private function funcaoPrivada(){
        echo 'sou uma função privada';
    }
}

class modifRecebe extends modificadores{
    public function apresentar(){
        //imprimiu todos os outros menos o privado logicamente
        echo $this->publico . PHP_EOL;
        echo $this->protegido . PHP_EOL;
        //echo $this->privado . PHP_EOL;
        //parent::apresentar();
    }
}

$obj = new modificadores();
$obj->apresentar();
$obj->publico = 'publico 2';
//$obj->protegido = 'protegido 2';
//$obj->privado = 'privado2 ';
//$obj->apresentar();

echo PHP_EOL;

$obj2 = new modifRecebe();
$obj2->apresentar();

