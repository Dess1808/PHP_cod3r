<div class="titulo">Arrays Constantes</div>

<?php
//basta definir com a palavra reservada "const" ou a função "define()"
const FRUTAS = array("laranja", "maçã", "banana");
echo FRUTAS[2];

//obs: qualquer tentativa de atribuição em um array constante não e interpretada pelo php, erro é gerado

echo PHP_EOL . "<br>";

define("CIDADES", array("Manaus", "Belo Horizonte", "Ceará"));
echo CIDADES[0];
