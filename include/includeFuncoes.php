<div class="titulo">Include em funções</div>

<?php
//alguns exemplo de include em funções, exemplos bem simples, utilizando o includeArquivo.php

echo "IncludeFuncoes.php" . "<br>";

function carregarInclude(){
    include('includeArquivo.php');

    //variavel de escopo local
    echo $variavel . "<br>";
    echo soma(1, 2) . "<br>";
}

echo 'chamando carregarInclude()' . '<br>';
carregarInclude();

//undefined
//echo $variavel;

echo "fora do carregarInclude()" . "<br>";

//funções funcionam fora do escopo em que foram chamadas
//existe algun mecanimos em relação ao include para que as functions continuem funcionando!!
echo soma(3, 4) . "<br>";