<div class="titulo">Desafio Impressão</div>

<!--
    Enuciado: 
    Imprimir apenas o valores do array co indice par
    - desefio: resolver com for e foreach
    - saida esperada: AAA, CCC, EEE
-->

<?php
echo <<<'enuciado'
    Enuciado: 
    Imprimir apenas o valores do array com indice par <br
    - desefio: resolver com for e foreach <br>
    - saida esperada: AAA, CCC, EEE <br>
enuciado;

$array = [
    0 => "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

//exemplo com foreach
foreach($array as $indice => $letter){
    if (($indice % 2) !== 0){ continue;} //pulando os pares
    echo $letter;
    echo PHP_EOL . "<br>";
}

echo PHP_EOL . "<br>";

//exemplo com o for
for ($i = 0; $i < count($array); $i++){
    if (($i % 2) !== 0){ continue;}
    echo $array[$i];
    echo PHP_EOL . "<br>";
}
