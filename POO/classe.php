<div class="titulo">Classe</div>

<?php
//exemplo simples de classe em php

class Cliente{
    //atributos 
    public $nome = 'Anonimo';
    public $idade = 18;

    //metodos 
    public function apresentar(){
        echo "Nome: {$this->nome} Idade: {$this->idade}" . PHP_EOL;
    }
}

//criando instancia 
$pessoa1 = new Cliente;
$pessoa1->nome = "Gabriel";
$pessoa1->idade = 26;
$pessoa1->apresentar();

$pessoa2 = new Cliente();
$pessoa2->nome = "Vitoria";
$pessoa2->idade;
$pessoa2->apresentar();
