<div class="titulo">Desafio Equacação</div>

<?php

//controle variable
$div1_eq1 = 6;
$div2_eq1 = 3;
$div3_eq1 = 2;
$div1_eq2 = 1;
$div2_eq2 = 5;
$div3_eq2 = 2;
$div4_eq2 = 7;
$dividendo1_eq1 = 3;
$dividendo2_eq1 = 2;
$dividendo1_eq2 = 2;
$expoente_eq1 = 2;
$expoente_eq2 = 2;
$expoente_eqfinal = 3;
$dividendo1_eqfinal = 10;


//equacao 1
$resultado_equa1 = ($div1_eq1 * ($div2_eq1 + $div3_eq1)) ** $expoente_eq1 / ($dividendo1_eq1 * $dividendo2_eq1);

//equacao 2
$resultado_equa2 = (($div1_eq2 - $div2_eq2) * ($div3_eq2 - $div4_eq2) / $dividendo1_eq2) ** $expoente_eq2;

$resultado_final = ($resultado_equa1 - $resultado_equa2) ** $expoente_eqfinal / $dividendo1_eqfinal ** $expoente_eqfinal;

echo "resulta é $resultado_final" . PHP_EOL . "<br>";