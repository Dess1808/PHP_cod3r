<div class="titulo">Do While/ While</div>

<?php
const VALOR_LIMITE = 10;
$contador = 5;

//exemplo com do while
do{
    echo $contador . PHP_EOL;
    $contador++;
}while($contador < VALOR_LIMITE);

$contador = 0;

//exemplo com while
while($contador < VALOR_LIMITE){
    echo $contador . PHP_EOL;
    $contador++;
}