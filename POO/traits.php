<div class="titulo">Traits</div>

<?php

/**
 * trait, resudo de codigo por composição, podemo reutilizar metodos e atribudos atraves
 * de traist inseridas nas classes
 */

trait Validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }

    public function calcula($num1, $num2){
        return $num1 + $num2;
    }
}

trait ValidacaoMelhor{
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }

    public function calcula($num1, $num2){
        return $num1 * $num2;
    }
}


class Classe{
    //basta utilizar a palavra reservada 'use' para inserir as traits na classe e usar os metodos
    //use validacao, validacaoMelhor;

    //resolvendo conflito
    use validacao, validacaoMelhor{
        //escolhendo explicitamente qual metodo de qual trait queremos utilizar
        validacaoMelhor::calcula insteadOf validacao;

        //utilizando o metodo que não foi escolhido
        //obs: pelo jeito para utilizar o outro metoodo não escolhido so renomeando ele
        validacao::calcula as calculaMulti;        
    }
}

$obj = new Classe();
var_dump($obj->validarString(' '));
var_dump($obj->validarStringMelhor(' '));

echo $obj->calcula(1, 2) . PHP_EOL . "<br>";
echo $obj->calculaMulti(1, 2) . PHP_EOL . "<br>";

