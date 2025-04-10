<div class="titulo">Argumento Padrão</div>

<?php
/**
 * basta atribuir um valor no momento em que definir os parametros da função
 * 
 * dica: O detalhe e sempre colocar os valores padrão por "ultimo", da esquerda para a direita
 * para evitar confusão, pos as funções sempre receber os valores da esquerda para direita, pode correr o 
 * risco de inserir valores nos parametros errados.
 */

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Olá, $nome $sobrenome" . PHP_EOL;
}

saudacao();
