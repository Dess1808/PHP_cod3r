<?php
/**
 * adivinhar qual seria a saida para o array em questão
 */

$lista = array(
    1, 
    4 => 2,
    3 => 3,
    'a' => 4,
    5, 
    'g' => 6,
    '06' => 7,
    0 => 8
);
//OBS: para o indexe 0 que sera movido para o inicio da lista, mesmo sendo declarado por ultimo
//saida: 0 => 8, 4 => 2, 3 => 3, 'a' => 4, 5 => 5, 'g' => 6, '06' => 7, 
print_r($lista);