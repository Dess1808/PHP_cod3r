<div class="titulo">Switch</div>

<?php
//exemplos simples de swithc em php

$categoria = "sedan";

switch(strtolower($categoria)){
    case 'luxo':
        $carro = "Mercedes";
        $preco = 250000;
        break;
    case "suv":
    case "suv basico":
        $carro = "Renegade";
        $preco = 80000;
        break;
    case 'sedan':
        $carro = "Etios";
        $preco = 55000;
        break;
    default:
        $carro = "Mobi";
        $preco = 33000;
        break;
}

//formatando o numeros
$preco_formatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $preco_formatado</p>";