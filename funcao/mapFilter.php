<div class="titulo">Map & Filter</div>

<?php
//duas funções com objetivo de aplicar alguma regra em um determinado array
//map - transforma em um novo array com a regra aplicada
//filter - filtra o array de acordo com a regra aplicada

//map - quando quero transformar um array 
$notas = [5.6, 3.4, 8.9, 10.0, 9.9];
$notasRound = [];

//sem map
foreach($notas as $nota){
    $notasRound[] = round($nota);
}

print_r($notasRound);

//com map
//obs: passar função com 'aspas'
$notasRound2 = array_map('round', $notas);
print_r($notasRound2);



//exemplo com filter
//sem filter 

$aprovados = [];
foreach($notas as $nota){
    if ($nota >= 7.0)
        $aprovados[] = $nota;
}

print_r($aprovados);

//com filter
function funcAprovados($nota){
    if ($nota >= 7.0)
        return $nota;
}

//filtrando o array, não necessariamente transformando em um novo array, é sim, o filtro do array
//original
$aprovados2 = array_filter($notas, "funcAprovados");
print_r($aprovados2);

