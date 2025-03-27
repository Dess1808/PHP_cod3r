<div class="titulo">Break & Continue</div>


<?php

//imprimindo somente numeros pares
$cont = 0;
for(;;){
    $cont++;
    if ($cont % 2 === 1)
        continue;
    echo $cont; 
    echo PHP_EOL;
    if ($cont >= 30)
        break;
}

echo PHP_EOL . "<br>";

//mais teste
foreach(array(1, 2, 3, 4, 5, 6, 6) as $number){
    if ($number === 5)
        break;
    if ($number % 2 === 0)
        continue;
    echo $number;
    echo PHP_EOL . "<br>";
}

echo PHP_EOL . "<br>";
