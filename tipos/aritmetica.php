<div class="titulo">Operações Aritméticas</div>

<?php
//principais operações em php

//soma 
echo 1 + 1; echo "<br>";

//mostra o tipo do resultado
var_dump(1 + 1); echo "<br>";

//as operações nao diferenciam muito de outras linguagens

//entre dois tipos inteiros o resultado sera float
echo 7 / 4; echo "<br>";

//truncando resultado para inteiro utilizando a func intdiv()
echo intdiv(7, 4); echo "<br>";

//arredondando valor
echo round(7 /4); echo "<br>";

//moudulo
echo 7 % 4; echo "<br>";

//exponenciação
echo 7 ** 4; echo "<br>";

//precedencia com parenteses
echo ((5 - 4) * 3) / 2; echo "<br>";

//precedencia com operadores
echo 5 - 4 * 3 / 2; echo "<br>";

//obs: operações aritméticas sempre são binarias.



