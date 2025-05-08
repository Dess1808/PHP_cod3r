<?php
require_once('Pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        $this->login = $login;
        parent::__construct($nome, $idade);
    }

    function apresentar(){
        //pegando metodo da classe pai "apresentar" e concatenando retorno com string do "apresentar" filho
        return parent::apresentar() . " @{$this->login}";
    }
}

