<div class="titulo">Modificador Final</div>


<?php

//exemplos da utilização do final, trucando uma classe ou metodo para que o mesmo 
//não pode ser alterado quando recebido por herança

abstract class iAbstrata{
    public abstract function metodo1();
    
    public final function metodo2(){
        echo 'metodo2' . "<br>";
    }
}

class Classe extends iAbstrata{
    public function metodo1(){
        echo 'metodo1' . "<br>";
    }

    //tentando modificar o metodo 2
    //não podemos modificar metodo 'final'
    /*
    public function metodo2(){
        echo 'novo metodo2';
    } 
    */  
}

$obj = new Classe();
$obj->metodo2();