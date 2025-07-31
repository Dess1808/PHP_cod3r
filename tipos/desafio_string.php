<div class="titulo">Desafio string</div>

<?php
/**
 * Qual metedo que pode ser usado para encontrar a primeira ocorrencia da string
 * "abc" na string principal "!AbcaBcabc" que retorne?
 */

echo <<<'enuciado'
<p>Qual método que pode ser usado para encontrar a primeira ocorrencia da string 
"abc" na string principal "!AbcaBcabc" que retorne 1?</p>
enuciado;

$string1 = "abc";
$string2 = "!AbcaBcabc";
$position = stripos($string2, $string1);

//utilizar o !== pos o retorno de mb_stripos() e um valor diferente de false se encontrado, se 
//não encontra, retorna o valor boolean "false"
if ($position !== false){
    echo "a substring $string1 encontrada na posição $position" . PHP_EOL . "<br>";
}else {
    echo "substring não encontra." . PHP_EOL . "<br>";
}

