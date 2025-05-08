<div class="titulo">Includes</div>

<?php
//arquivo principal que terá o include, com isso podemos utilizar variaveis e funções de outros arquivos 
//incluidos

//obs: vc pode chamar o include mais vezes, porem pode gerar erros em funções, verificar !!!

echo 'estamos no include.php' . PHP_EOL . "<br>";

//podemos chamar o mesmo include, atenção somente nas funções
include('includeArquivo.php');
include('includeArquivo.php');


echo "variavel do includeArquivo = $variavel" . "<br>";

echo soma(1, 2);