<div class="titulo">Desafio Erros</div>

<?php

interface iTemplete{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements iTemplete{
    public function metodo3(){
        echo 'estou funcionando' . "<br>";
    }
}

class Classe extends ClasseAbstrata{
    function __construct($parametro){
        echo $parametro . PHP_EOL . "<br>";
    }

    function metodo1(){
        echo 'metodo 1' . PHP_EOL . "<br>";
    }

    public function metodo2($parametro){
        echo "metodo 2 com parametro = $parametro" . PHP_EOL . "<br>";
    }
}

//testes
$exemplo = new Classe('...');
$exemplo->metodo3();
$exemplo->metodo2('Olá');
$exemplo->metodo1();

$outroExemplo = new Classe('...');


/*
Interface iTemplete{
	function metodo1();
	public function metodo2($parametro);
}

Abstract class ClasseAbstrata extends iTemplete{ //erro 1 - interface deve-se se usar "implements"
	public function metodo3(){
		echo 'Estou funcionando';
	}
}

Class Classe implements ClasseAbstrata{ //erro 5 - para extender uma classe abstrata utili-se o "extends"
	function __contruct ($parametro){ 
		
	}

    //erro 2 - não foi implementado os outros metodos 
}

//erro 6 - na hora de instaciar não foi passado o parametro, pos o construtor esta esperando!
$exemplo = Classe(); //erro 3 - palavra reservada new não foi utilizada
$exemplo.metodo3(); //erro 4 - para acessar um metodo em php e preciso utilizar a "->"
*/