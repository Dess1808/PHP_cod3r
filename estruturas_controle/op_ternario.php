<div class="titulo">Operador Ternario</div>

<?php
$idade = 17;
$status;

$status = $idade >= 18 ? "Maior de idade - $idade" : "Menor de idade - $idade";

echo $status;

//pode - se utlizar ternario multiplos, não e recomendado