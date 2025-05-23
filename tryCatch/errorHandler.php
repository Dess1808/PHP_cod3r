<div class="titulo">Errors Handlers</div>

<?php
//exemplos do gerenciador de erros do php
//podemos personalizar o que será mostrando quando um erro acontecer
//controlar erros para o usuario
/*
E_ERROR
E_ALL
E_WARNING

init_set('display_errors', 1);

error_reporting(E_ERROR);  

set_error_handler()
*/

//ainda descobrir sua serventia
ini_set('display_errors', 1);
//error_reporting(E_ERROR);


//require_once('arquivoNaoExiste.php');
//echo 4 / 0 . PHP_EOL;

//pega a mensagem de erro e procurar por palavra selecionada
function filtrarMenssagem($errno, $errstring){
    $text = 'require_once';
    //desabilitando mensagem de warging
    return !!strpos(" $errstring", $text);
}

set_error_handler('filtrarMenssagem', E_WARNING);

require_once('arquivoNaoExiste.php');








