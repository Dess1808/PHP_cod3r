<div class="titulo">Desafio For</div>


<?php
//exemplo normal 
$bloco = "";
for ($count = 1; $count <= 5; $count++){
    $bloco .= '#';
    echo $bloco . PHP_EOL . "<br>";
}

//exemplo sem operação aritimetica
for ($bloco2 = "#"; $bloco2 !== "######"; $bloco2 .= '#'){
    echo $bloco2 . PHP_EOL . "<br>";
}

//detalhe: utilizand a concatenação de string