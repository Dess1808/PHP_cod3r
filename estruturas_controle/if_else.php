<div class="titulo">If/Else</div>

<?php
//alguns exemplos de if else

//sem bloco, executa tudo que esta abaixo da condição if
if (true)
    echo "true" . PHP_EOL . "<br>";
    echo "false" . PHP_EOL . "<br>";

//bloco padrao, verdadeiro e false
if (false){
    echo "true" . PHP_EOL . "<br>";
} else {
    echo "false" . PHP_EOL . "<br>";
}

//elseif 
if (false){
    echo "true". PHP_EOL . "<br>";
} else if (true){
    echo "ifelse true" . PHP_EOL . "<br>";
} else {
    echo "false default" . PHP_EOL . "<br>";
}

