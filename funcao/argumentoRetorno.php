<div class="titulo">Argumento & Retorno</div>

<?php
//exemplos de funções com argumentos e retornos

function obterMensagem(){
    return 'Olá' . PHP_EOL;
}

//obtendoo retorno da função em variavel
$mensagem = obterMensagem();
echo $mensagem;

//Exemplo Parametros
function obterOutraMensagem($nome){
    return "Ola, $nome" . PHP_EOL; //sempre retorna o valor
}

$outraMensagem = obterOutraMensagem('Vitoria');

//o php pode ter problemas com caracteres especiais, principalmente da lingua portuguesa
echo strtoupper($outraMensagem);

//Valor e Referência 
//passando &$a por referencia, enquanto o $b e passado por valor
function soma(&$a, $b){
    return $a + $b;
}

$a = 1;
$b = 2;

$resultado = soma($a, $b);
echo $resultado . PHP_EOL;





