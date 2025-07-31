<div class="titulo">For</div>

<?php
//exemplos simples de for
for($cont = 0; $cont < 5; $cont++){
    echo $cont;
}

echo PHP_EOL . "<br>";

//sem inicializar variaveis incremento
for(;$cont < 10; $cont++){
    echo $cont;
}

echo PHP_EOL;

//sem informar a variavel incializadora e o incrimento
for(;$cont < 15;){
    echo $cont;
    $cont++;
}

echo PHP_EOL . "<br>";

//percorrendo um array com for utlizando o count()
$weekDay = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado",
];

for ($cont = 0; $cont < count($weekDay); $cont++){
    echo "{$weekDay[$cont]}" . PHP_EOL;
}

echo PHP_EOL . "<br>";

//percorrendo um matriz com o for junto da sublistas
$matrix = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10]
];

for ($cont1 = 0; $cont1 < count($matrix); $cont1++){
    for ($cont2 = 0; $cont2 < count($matrix[$cont1]); $cont2++){
        echo "{$matrix[$cont1][$cont2]}";
    }
    echo PHP_EOL . "<br>";
}   