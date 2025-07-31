<div class="titulo">Foreach</div>


<?php
//exemplos simples com foreach
$arr = [1, 2, 3, 4, 5, 6, 7];

foreach($arr as $number){
    echo $number;
}

echo PHP_EOL . "<br>";

//exemplo com uma matrix
$matrix = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10]
];

foreach($matrix as $row){
    foreach($row as $number){
        echo $number;
    }
    echo PHP_EOL . "<br>";
}

echo PHP_EOL . "<br>";

//alterand valor na repetição utilizando o endereço de memoria
$arr2 = [1, 2, 3, 4, 5, 6, 7];
foreach($arr2 as &$number){ //passando enderço de memoria
    $number *= 2;
    echo $number;
}
echo PHP_EOL . "<br>";

print_r($arr2);

echo PHP_EOL . "<br>";