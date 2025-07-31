<?php
abstract class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function apresentar(){
        return "{$this->nome}, {$this->idade}";
    }
}

