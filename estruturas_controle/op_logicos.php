<div class="titulo">Operadores Lógicos</div>

<?php
//and 
echo "<p>Tabela Verdade, Operadore logico AND - &&</p><hr><br>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

//or
echo "<p>Tabela Verdade, Operadore logico OR - ||</p><hr><br>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

//xor - OR exclusivo
echo "<p>Tabela Verdade, Operadore logico XOR - !=</p><hr><br>";
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

//exemplo na pratica
echo "<p>Exemplo, Aposentadoria</p><hr><br>";
$idade = 65;
$genero = 'M';

if ($idade == 60 && $genero === 'F'){
    echo "Pode se aposentar, genero -> $genero";
} elseif ($idade == 65 && $genero === 'M') {
    echo "Pode se aposentar, genero -> $genero";
} else {
    echo "Trabalhar mais um pouco....";
}

echo "<br>";

//exemplo de varias expressôes
echo "<p>Exemplo, Aposentadoria 2</p><hr><br>";
$pagou_previdenica = true;
$criterio_homem = ($idade == 65 && $genero === 'M');
$criterio_mulher = ($idade == 60 && $genero === 'F');
$atigiu_direito = $criterio_homem || $criterio_mulher;
$pode_aposentar = $atigiu_direito && $pagou_previdenica;

echo $pode_aposentar ? "Pode aposentar -> $genero" : "Trabalhar mais um pouco....";




