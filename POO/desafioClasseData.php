<div class="titulo">Desafio Classe a Data</div>

<?php
echo <<<enunciado
Criar um classe Data com dia, mês e ano. Todos são valores padrão
enunciado;

echo PHP_EOL;

class Data {
    //atributos
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    //metodos
    public function apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}" . PHP_EOL;
    }
}

$novaData = new Data;
$novaData->apresentar();

$novaData1 = new Data;
$novaData1->dia = 24;
$novaData1->mes = 8;
$novaData1->ano = 1998;
$novaData1->apresentar();