<div class="titulo">tipo Booleano</div>

<?php
echo var_dump(true) . "<br>";

//php pode converter valores automativamente para true ou false

//nao converte automaticamente uma string com "false"
echo var_dump("false") . "<br>";

echo is_bool(false) . "<br>";

//regras de conversao
echo var_dump((bool) 0) . "<br>"; //true
echo var_dump((bool) 20) . "<br>"; //true
echo var_dump((bool) -1) . "<br>"; //true
echo var_dump((bool) "") . "<br>"; //string vazia, identifica com false
echo var_dump((bool) "0") . "<br>";//converte a string "0" para bool, indicando false (execeção)
echo var_dump((bool) " ") . "<br>"; //não converte espaço em branco
echo var_dump(!!false) . "<br>";//dupla negação




