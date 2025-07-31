<div class="titulo">Include vs Require</div>

<?php
ini_set('display_errors', 1);
//exemplos simples de require e include

/**
 * principal diferença
 * Include - warning 
 * Require - Fatal Erro
 */

//include
include('includeArquivo.php');
echo $variavel . PHP_EOL;

//require
//fatal error se não encontrar arquivo
require('includeArquivo.php');
echo $variavel . PHP_EOL;






