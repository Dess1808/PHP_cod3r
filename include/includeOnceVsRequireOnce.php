<div class="titulo">Include e Require Once</div>


<?php
ini_set('display_errors', 1);

//Garantir que arquivos carreguem somente uma vez

//include
include_once(__DIR__ . '/includeArquivo.php');
//não deixar carregar novamente, pos ja existe um arquivo carregado
//include_once(__DIR__ . '/includeArquivo.php');

//require 
//mesmo com require, o php entendi que ja existe um "includeArquivo.php" ja carregado
require_once(__DIR__ . '/includeArquivo.php');

