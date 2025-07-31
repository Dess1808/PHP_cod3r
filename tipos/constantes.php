<?php
//alguns exemplos teste de constantes

const VALORA = 10.9;
define("OUTRO_VALOR", 11.4);

//const verificar porque constantes estão dando tanto problema!!!!!
const FATOR = 1.60934;
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM_KM_METRO = 1000;

$varivel = 1;

echo VALORA + OUTRO_VALOR;
echo OUTRO_VALOR + $varivel;

if (true){
    //porque a palavra const não funciona dentro de um IF
    //const VALOR = 10; 
    define('VALOR', 10);
    echo VALOR;
}
