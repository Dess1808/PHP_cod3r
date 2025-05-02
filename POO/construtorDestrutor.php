<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    //metodos construtor
    function __construct($novoNome, $idade){
        //para a instancia atual, atribuir aos atributos "this"
        $this->nome = $novoNome; 
        $this->idade = $idade;
    }

    //metodos destrutor
    function __destruct(){
        echo "morri " . __CLASS__ . PHP_EOL;
    }

    function apresentar(){
        return "nome: {$this->nome}, Idade: {$this->idade}" . PHP_EOL;
    }
}

//instanciar objeto com paramentros
$pessoa1 = new Pessoa("Gabriel", 26);
echo $pessoa1->apresentar();

$pessoa2 = new Pessoa("Vitoria", 18);
echo $pessoa2->apresentar();

//obs: o objeto morre automatico quando funalizado, isso se desclarado no corpo da classe
//utilizar o unset()
//unset($pessoa1);
