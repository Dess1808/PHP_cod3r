
<?php

//exemplos de classe abstratas 
//similar a idea de interfaces, porem vc pode implementar metodos concretos ou não nessas classes 
//abstratas 

abstract class Abstrata{
    public abstract function metodo1();
}

abstract class FilhaAbstrata extends Abstrata{    
    //deixar de ser abstract? talvez porque ja foi implementado
    public function metodo1(){
        echo 'imprimendo metodo 1';
    }
    
    //terá que ser implementado na classe concreta
    public abstract function metodo2();

    //posso implementar metodo concreto
    public abstract function metodo3($parametro);

    //não e abstract, pos ja foi implementado
    public function metodo4(){
        echo 'Metodo 4';
    }
}

class Concreta extends FilhaAbstrata{
    public function metodo2(){
        echo 'metodo 2 na classe concreta';

    }

    //porque não preciso utilizar o this? talvez quando não inicializo pelo construtor, não e preciso !!
    //testar isso!!
    public function metodo3($parametro){
        echo $parametro;
    }

    //ou outros metodo ja foram implementados pelas classes abstratas
}

//verificar esse diferença, contexto da instancia e todo metodos
$obj = new Concreta();
$obj->metodo3("metodo 3");
$obj->metodo2();

//os mesmo ja foram implementados
$obj->metodo1();
$obj->metodo4();

