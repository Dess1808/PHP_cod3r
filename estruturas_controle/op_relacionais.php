<div class="titulo">Operadores Relacionais</div>

<?php
//exemplos de operadores relacionais com var_dump
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 < 1);
var_dump(1 <= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

//exemplo com igualdade restrita
var_dump(111 == '111'); //true
var_dump(111 === '111'); //false
var_dump(111 != '111'); //false
var_dump(111 !== '111'); //true

//exemplos simples de if/else
echo "<p>Relacionais no IF/Else</p><hr>";
$idade = 65;
if ($idade < 18) {
    echo "Menor de idade, $idade anos" . PHP_EOL . "<br>";
} elseif ($idade <= 65) {
    echo "Adulto, $idade anos" . PHP_EOL . "<br>";
} else {
    echo "Terceira idade, $idade anos" . PHP_EOL . "<br>";
}

//spaceship
echo "<p>Spaceship</p><hr>";
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

//dupla negação
echo "<p>Valores, pode ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
    p{
        margin-bottom: 0px;
    }

    hr{
        margin: 0px;
    }
</style>
