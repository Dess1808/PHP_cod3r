<?php
namespace Classe\Abstrata\Pessoa;

abstract class Pessoa{
    public $idade;
    public $nome;

    public function __construct($idade, $nome){
        $this->idade = $idade;
        $this->nome = $nome;
    }

    public function apresentar(){
        return "{$this->idade}, {$this->nome}";
    }
}





