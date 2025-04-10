<div class="titulo">Escopo</div>

<?php

//exemplos simples de criação de funções em php

function imprimirMensagem(){
    echo 'Olá' . PHP_EOL;
}

imprimirMensagem();

//escopo de variaveis 
$nome = 'Gabriel Souza Martins';

function imprimirOutraMensagem(){
    //escopo mais interno
    $nome = 'Vitoria Geliane';
    echo $nome . PHP_EOL;
}

imprimirOutraMensagem();

//escopo global 
echo $nome . PHP_EOL;

$maisNome = 'Gabriel';

function imprimirMaisNome(){
    //fazendo referencia a varivel global existente fora do escopo
    global $maisNome;
    $maisNome = 'Vitoria';
    echo $maisNome . PHP_EOL;
}

imprimirMaisNome();

echo $maisNome . PHP_EOL;


