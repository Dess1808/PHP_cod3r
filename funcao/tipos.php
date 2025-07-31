<?php
/*
    E possivel definir tipos nos parametros das variaveis para truncar seus tipos a dados especificos, 
    e possivel tambem definir o tipo de retorno de um função
*/

function soma(int $a, int $b){
    return $a + $b;
}

//retorna erro se passar valores diferentes do definido
//echo soma(1.5, 2.3);

echo soma(3, 5);
echo PHP_EOL;

//defindo tipo de retorno em função
function outraSoma($a, $b): int{
    return $a + $b;
}

//echo outraSoma(1.5, 2.3);

echo outraSoma(3, 5);