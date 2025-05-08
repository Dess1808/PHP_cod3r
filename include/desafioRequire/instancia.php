<div class="titulo">Desafio Require</div>

<?php

//imports
//require_once('Pessoa.php');
require_once('Usuario.php');

$objPessoa = new Usuario('Gabriel', 25, 'Dess');
echo $objPessoa->apresentar() . PHP_EOL;