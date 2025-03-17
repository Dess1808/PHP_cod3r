<?php
echo <<<'enuciado'
Utilizar um operador relacionar que garanta a 
igualdade do numero PI fornecido pela função pi() e 
uma variável com o valor $pi 3.14, existe um operador 
que forneça um range aceitável?	 
enuciado;

echo "<br>";

$outro_pi = 3.14;

echo pi() . PHP_EOL . "<br>";
echo $outro_pi . PHP_EOL . "<br>";

//considerar o valor da diferença como condiçao para serem iguais
if ((pi() - $outro_pi) <= 0.01){
    echo "iguais";
} else {
    echo "diferentes";
}