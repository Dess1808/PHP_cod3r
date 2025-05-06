<div class="titulo">Métodos Mágicos</div>

<?php
//exemplo de aplicação de metodos mágicos

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    //toString e chamado por natureza pelo php para converter um objeto em string
    public function __toString(){
        return "{$this->nome}, {$this->idade}";
    }

    public function apresentar(){
        //o this isalado nessa caso serve para referenciar a instancia atual, convertido pelo toString
        echo $this;
    }

    //__get() cria automaticamente um novo atributo se caso não existir na classe, recebe atributo como parametro
    public function __get($atributo){
        echo $atributo;
    }

    //__set() caso precise criar um atributo e atribui-lo valor, caso não exista na classe
    public function __set($atributo, $valor){
        echo "$atributo, $valor";
    }

    //__call() caso não existe o metodo chamado, o __call() irá criar esse metodos e seus parametros
    public function __call($metodo, $parametro){
        echo "metodo = $metodo, parametro = " . PHP_EOL;
        //o parametro sempre será um array;
        print_r($parametro);
    }
}

$obj = new Pessoa('Gabriel', 26);
//chamando o toString
$obj->apresentar();
echo PHP_EOL;

//atributo que não existe
echo $obj->atributo . PHP_EOL;

//setando atributo que não existe 
$obj->outroAtributo = 'valor atributo';
echo PHP_EOL;

//metodo com parametros que não existem
$obj->metodo1('parametro', 'Gabriel', 26);
echo PHP_EOL;