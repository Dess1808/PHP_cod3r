<div class="titulo">Herança</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'adeus pessoa' . PHP_EOL;
    }

    function apresentar(){
        return "{$this->nome}, {$this->idade}";
    }
}

//e necessario criar os atribuito e passamos no construtor
class Usuario extends Pessoa{
    public $login;
    public $nome;
    public $idade;

    function __construct($nome, $idade, $login){
        $this->login = $login;
        //estamos simplismente utilizando o construtor da classe pai para inicializar os atributos nome e idade
        parent::__construct($nome, $idade); 
    }

    function __destruct(){
        echo 'Adeus usuario' . PHP_EOL;
    }

    //ja estaria funcionando o override nesse metodo? depende da instancia em que o metodo está?
    function apresentar(){
        //consigo concaternar por ser uma string de retorno? talvez
        //consigo chamar o metodo da class pai com o parent::, porem a instacia atual precisa ter as informações dos atributos $nome e $idade
        return parent::apresentar() . " @{$this->login}"; 
        //return " @{$this->login}";
    }
}

$novaPessoa = new Pessoa('Gabriel', 26);
echo $novaPessoa->apresentar() . PHP_EOL;

//e necessario informar sim os outros atributos, não consigo utiliar por herança
$novoUser = new Usuario('Gabriel', 26, 'Dess');
echo $novoUser->apresentar() . PHP_EOL;

