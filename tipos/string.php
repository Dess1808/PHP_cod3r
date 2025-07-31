<div class="titulo">String</div>

<?php
echo "Eu sou uma string" . PHP_EOL;

var_dump("eu também");

//concatenação
echo "string" . " somos" . PHP_EOL . "<br>";
echo "string1", "string2" . PHP_EOL . "<br>";
echo "'teste'" . ' "teste"' . ' \'teste\'' . PHP_EOL . "<br>"; //diferentes tipos de aspas

//funcação print
print("função print" . PHP_EOL . "<br>");

//outras funções

echo strtoupper("maximizado") . PHP_EOL . "<br>"; 
echo strtolower("MINIMIZADO") . PHP_EOL . "<br>";
echo ucfirst("primeira letra") . PHP_EOL . "<br>"; //deixa a primeira letra em uppercase
echo ucwords("em uma frase, deixa a primeira letra em caixa alta") . PHP_EOL . "<br>"; //retonar a primeira letra maiuscul
echo strlen("eu também") . PHP_EOL . "<br>"; //tamanho da string com encondig antigo
echo mb_strlen("eu também") . PHP_EOL . "<br>"; //com enconding atual (utf-8)
echo mb_strlen("eu também", "utf-8") . PHP_EOL . "<br>"; //com enconding informado
echo substr("so um parte", 7, 6) . PHP_EOL . "<br>"; //retonar somente uma parte da string
echo str_replace("isso", "aquilo", "string isso") . PHP_EOL . "<br>";
