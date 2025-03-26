<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 45,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Anna",
        "idade" => 23,
        "naturalidade" => "Rio de Janeiro"
    ]
];

print_r($dados);
echo PHP_EOL . "<br>";

//dados isolado
echo $dados[0]["idade"];

//acresentando array no arrayMulti
$dados[] = [
    "nome" => "Vitória",
    "idade" => 18,
    "naturalidade" => "Manaus"
];

echo PHP_EOL . "<br>";
print_r($dados);

//acresentar uma key nova ao arrayMulti ja existente
$dados[2]["vizinho"] = "Chaves";

echo PHP_EOL . "<br>";
print_r($dados);

//imprimind somente uma estrutura array dentro do array multi
echo PHP_EOL . "<br>";
print_r($dados[2]);
