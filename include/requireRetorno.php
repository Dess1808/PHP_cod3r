<div class="titulo">Require com Retorno</div>

<?php

//exemplos de um require de um arquivo que possue retorno 
//podemos receber um retorno de um arquivo inteiro

//com caminho absoluto
$valorRetorno = require(__DIR__ . '/arquivoRetorno.php');

//posso usar somente o valor retornado!!
echo $valorRetorno . PHP_EOL;
//echo $outroValor . PHP_EOL;
