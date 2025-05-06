<div class="titulo">Polimorfismo</div>

<?php
//alguns exemplo do polimorfismo em php

//não queremos instanciar
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class ArrozParboilizado extends Arroz{

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    public function __construct($peso){
        $this->peso = $peso;
    }

    //recebendo instancia como parametro
    //amarrando tipo em parametro de função
    public function comer(Arroz $comida){
        //peso da pessoa + o peso da comida, peso total
        $this->peso += $comida->peso;
    }
}

$pessoa1 = new Pessoa(59.00);

//$comida1 = new Feijao(); precisa ser to tipo arroz
$comida1 = new Arroz();
$comida1->peso = 1.23;
$pessoa1->comer($comida1);
echo $pessoa1->peso . PHP_EOL;

//outro tipo de arroz
//funciona pos arraozParboilizado extend arroz, mesmo comportamento com tipo levemente diferente
$comida2 = new ArrozParboilizado();
$comida2->peso = 0.34;
$pessoa1->comer($comida2);
echo $pessoa1->peso . PHP_EOL;


