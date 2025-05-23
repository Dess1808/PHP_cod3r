<?php namespace tryCatch;?>

<div class="titulo">Desafio intDiv</div>

<?php
echo <<<enunciado
O metodo intdiv para...
- Lançar uma exceção quando tentar dividir por zero 
- Lançar uma exceção quando o resultado não for inteiro
- devir normalmente nos demais casos

Testes...
8 e 2 - sucesso 
8  e 3 - exceção
8 e 0 - exceção
Intdiv "original", 8 e 3 - sucesso
enunciado;

echo PHP_EOL;
echo PHP_EOL;

function intdiv($n1, $n2){
    if ($n2 === 0){
        //buscando exceções na raiz
        throw new \DivisionByZeroError("Divisão por zero");
    }

    if (!is_int($n1/$n2)){
        //muito generico, precisa ser mais expecifico!
        throw new \Exception("Valor não é inteiro");
    }

    return $n1 / $n2;
}

//teste
try {
    $resultado = intdiv(8, 3);
    echo $resultado . PHP_EOL;
} catch(\DivisionByZeroError $e){
    echo $e->getMessage() . PHP_EOL;
} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
} finally {
    echo "divisão 'original' = " . \intdiv(8, 3) . PHP_EOL;
}

