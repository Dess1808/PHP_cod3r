<?php
namespace Classe\Instanciavel\Usuario;

//solicitando Pessoa
require_once('Pessoa.php');

use \Classe\Abstrata\Pessoa\Pessoa;

/**
 * Verficiar porque a utilizando de herança com namespace não funciona
 * podemos utilizar atributos????
 * retorno erro: deprecated
*/


//organizando variabeis, esse modo, posso usar a herança?
class Usuario extends Pessoa{
    public $login;

    public function __construct($nome, $idade, $login){
        $this->login = $login;
        parent::__construct($nome, $idade);
    }

    public function apresentar(){

        return "{$this->login}, " . parent::apresentar();
    }
}